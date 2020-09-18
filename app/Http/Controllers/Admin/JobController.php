<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PiedWeb\TextSpinner\Spinner;
use App\Job;
use App\Activity;
use App\Keyword;
use App\Term;
use App\Bulk;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        if($request->session()->has('admin')) {
            $jobs = Job::orderByDesc('id')->paginate(10);
            return view('admin.jobs', compact('jobs'));
        }else
            return redirect('admin/login');
    }

    public function active(Request $request)
    {
        if($request->session()->has('admin')) {
            $jobs = Job::orderByDesc('id')->where('approved','1')->paginate(10);
            return view('admin.activeJobs', compact('jobs'));
        }else
            return redirect('admin/login');
    }

    public function inactive(Request $request)
    {
        if($request->session()->has('admin')) {
            $jobs = Job::orderByDesc('id')->where('approved','0')->paginate(10);
            return view('admin.inactiveJobs', compact('jobs'));
        }else
            return redirect('admin/login');
    }

    public function pending(Request $request)
    {
        if($request->session()->has('admin')) {
            $jobs = Job::orderByDesc('id')->where('approved','3')->paginate(10);
            return view('admin.pendingJobs', compact('jobs'));
        }else
            return redirect('admin/login');
    }

    public function status(Request $request, $id){
        if($request->session()->has('admin')) {
            $job = Job::find($id);
            if($job->approved == 1 || $job->approved == 3){
                Job::where('id',$id)->update(['approved' => 0]);
            }elseif($job->approved == 0){
                Job::where('id',$id)->update(['approved' => 1]);
            }
            return redirect()->back();
        }else
            return redirect('admin/login');
    }
            
    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(Request $request)
    {
        if($request->session()->has('admin')) {
            return view('admin.addJob');
        }else
            return redirect('admin/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        if($request->session()->has('admin')) {
            // return $request;
            $job = new Job();
            $job->title = $request->title;
            $job->meta_description = isset($request->meta)?$request->meta:'';
            $job->description = isset($request->desc)?$request->desc:'';
            $job->links = isset($request->link)?$request->link:'';
            $job->tags = isset($request->tags)?$request->tags:'';
            $job->category = isset($request->category)?$request->category:'';
            $job->location = isset($request->location)?$request->location:'';
            $job->duration = isset($request->duration)?$request->duration:'';
            $job->joining_date = isset($request->joiningDate)?$request->joiningDate:'';
            $job->end_date = isset($request->endingDate)?$request->endingDate:'';
            $job->vacancies = isset($request->vacancy)?$request->vacancy:'';
            $job->salary = isset($request->salaryFrom)?$request->salaryFrom:'';
            $job->timings = isset($request->jobTiming)?$request->jobTiming:'';
            $job->opening_dates = isset($request->openingDate)?$request->openingDate:'';
            $job->purpose = isset($request->jobPurpose)?$request->jobPurpose:'';
            $job->responsibilities = isset($request->responsibilities)?$request->responsibilities:'';
            $job->requirements = isset($request->requirements)?$request->requirements:'';
            $job->approved = 1;
            $job->slug = $this->createSlug($job->title);
            $job->user_id = 1;

            if($request->hasfile('file_source')){
                $file = $request->file('file_source');
                $ext = $file->getClientOriginalExtension();
                $trim = str_replace('', '-', $request->title);
                $name = '1-'.$trim.'.'.$ext;
                if($file->move('public/assets/images/jobs/'.$name))
                    $job->image = $name;
            }else
                $job->image = '';

            $job->save();

            $title = $job->title;
            $meta = $job->meta_description;
            $content = $job->description;
            $url = $job->links;
            $slug = $this->createSlug($job->title);
            $id = $job->id;

            Bulk::create([
                'title' => $title ,
                'meta_description' => $meta ,
                'content' => $content ,
                'url' => $url ,
                'slug' => $slug , 
                'job_id' => $id
            ]);

            return redirect()->route('admin.jobs')->with('success','Job posted successfully!');
        }else
            return redirect('admin/login');
    }


    public function bulk_create(Request $request)
    {
        if($request->session()->has('admin')) {
            $keys = Keyword::all();
            return view('admin.bulkJob',compact('keys'));
        }else
            return redirect('admin/login');
    }

    public function bulk_store(Request $request)
    {
        if($request->session()->has('admin')) {

            $a = '{'.$request->job1.'}';
            $b = '{'.$request->job2.'}';
            $term1 = Term::where('keyword',$request->job1)->get();
            $term2 = Term::where('keyword',$request->job2)->get();
            $meta = isset($request->meta)?$request->meta:'';
            $description = isset($request->desc)?$request->desc:'';

            $job = new Job();
            $job->title = $request->job1.' in '.$request->job2;
            $job->meta_description = $meta;
            $job->description = $description;
            $job->links = '';
            $job->tags = isset($request->tags)?$request->tags:'';
            $job->category = isset($request->category)?$request->category:'';
            $job->location = isset($request->location)?$request->location:'';
            $job->duration = isset($request->duration)?$request->duration:'';
            $job->joining_date = isset($request->joiningDate)?$request->joiningDate:'';
            $job->end_date = isset($request->endingDate)?$request->endingDate:'';
            $job->vacancies = isset($request->vacancy)?$request->vacancy:'';
            $job->salary = isset($request->salaryFrom)?$request->salaryFrom:'';
            $job->timings = isset($request->jobTiming)?$request->jobTiming:'';
            $job->opening_dates = isset($request->openingDate)?$request->openingDate:'';
            $job->purpose = isset($request->jobPurpose)?$request->jobPurpose:'';
            $job->responsibilities = isset($request->responsibilities)?$request->responsibilities:'';
            $job->requirements = isset($request->requirements)?$request->requirements:'';
            $job->approved = 1;
            $job->slug = '';
            $job->user_id = 1;

            if($request->hasfile('file_source')){
                $file = $request->file('file_source');
                $ext = $file->getClientOriginalExtension();
                $trim = str_replace('', '-', $request->title);
                $name = '1-'.$trim.'.'.$ext;
                if($file->move('public/assets/images/jobs/'.$name))
                    $job->image = $name;
            }else
                $job->image = '';

            $job->save();

            foreach($term1 as $job){
                foreach($term2 as $city){
                    $x = str_replace($a,$job->name,$meta);
                    $meta_text = str_replace($b,$city->name,$x);

                    $x = str_replace($a,$job->name,$description);
                    $text = str_replace($b,$city->name,$x);
                    
                    $title = $job->name.' In '.$city->name;
                    $meta_desc = Spinner::spin($meta_text);
                    $content = Spinner::spin($text);
                    $url = $job->links;
                    $slug = $this->createSlug($title);
                    $id = $job->id;

                    Bulk::create([
                        'title' => $title ,
                        'meta_description' => $meta_desc, 
                        'content' => $content , 
                        'url' => $url,
                        'slug' => $slug , 
                        'job_id' => $id
                    ]);
                }
            }
                    return redirect()->route('admin.jobs')->with('success','Job posted successfully!');

        }else
            return redirect('admin/login');
    }


    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($title);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Bulk::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('admin.jobDetails',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function applied(Request $request){
        if($request->session()->has('admin')) {
            $applied = Activity::orderbyDesc('id')->paginate(10);
            return view('admin.appliedJobs',compact('applied'));
        }else
            return redirect('admin/login');
    }
}
