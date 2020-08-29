<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\CV;
use App\Job;
use App\Mail\MailCv;
use App\Mail\MailJob;
use App\Mail\Applied;
use Illuminate\Support\Facades\Storage;
class WebController extends Controller
{
    public function index(){
        return view('index');
    }
    public function cvUpload(Request $request){
        $code = str_random(10);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($code);
        $user->user_type = 'candidate';
        $user->save();

        if($request->hasfile('image'))
        {
            $file = $request->file('image')->getClientOriginalName();
            $image = 'Temping Agency'.'-'.$user->id.'-'.$file;
            $path = $request->file('cv')->storeAs('images',$image,'s3');
            $imgUrl = Storage::disk('s3')->response('images/' . $image);
        }

        if($request->hasfile('cv'))
        {
            $file = $request->file('cv')->getClientOriginalName();
            $vitae = 'Temping Agency'.'-'.$user->id.'-'.$file;
            $path = $request->file('cv')->storeAs('vitae',$vitae,'s3');
            $cvUrl = Storage::disk('s3')->response('vitae/' . $vitae);
        }


        $cv = new CV();
        $cv->name = $user->name;
        $cv->image = $image;
        $cv->email = $user->email;
        $cv->phone = $user->phone;
        $cv->address = $request->address;
        $cv->location = $request->location;
        $cv->category = $request->category;
        $cv->pref_temporary = $request->choice;
        $cv->availability = $request->availability;
        $cv->expected_salary = $request->salary;
        $cv->cv = $vitae;
        $cv->user_id = $user->id;
        $cv->platform = 'Temping Agency';
        $cv->save();

        $mail = [
            'name' => $cv->name,
            'email' =>$cv->email,
            'phone' =>$cv->phone,
            'code' => $code,
            'location' => $cv->location,
            'cv' => $cvUrl,
        ];

        Mail::to($user->email)->send(new MailCv($mail));
        return redirect()->back()->with('success','Congratulations! Your CV has been uploaded');
    }
    public function post(Request $request){
        // return $request;
        $code = str_random(10);
        $user = new User();
        $user->name = '';
        $user->email = $request->email;
        $user->phone = '';
        $user->password = Hash::make($code);
        $user->user_type = 'employer';
        $user->save();


        $job = new Job();
        $job->title = $request->title;
        $job->description = isset($request->desc)?$request->desc:'';
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
        $job->approved = 3;
        $job->slug = $this->createSlug($job->title);
        $job->user_id = $user->id;
        if($request->hasfile('file_source')){
            $file = $request->file('file_source');
            $ext = $file->getClientOriginalExtension();
            $trim = str_replace('', '-', $request->title);
            $name = $user->id.'-'.$trim.'.'.$ext;
            if($file->move('public/assets/images/jobs/'.$name))
                $job->image = $name;
        }else
            $job->image = '';

        $job->save();


        $mail = [
            'name' => $user->name,
            'email' =>$user->email,
            'phone' =>$user->phone,
            'code' => $code,
            'title' => $job->title,
            'location' => $job->location,
            'type' => $job->type,
            'company' => $job->company,
        ];s

        Mail::to($user->email)->send(new MailJob($mail));
        return redirect()->back()->with('success','Congratulations! Your Job has been uploaded');
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
        return Job::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    public function jobs(){
        $jobs = Job::orderByDesc('id')->paginate(9);
        return view('career',compact('jobs'));
    }

    public function job_detail($slug){
        $job = Job::where('slug',$slug)->first();
        return view('job',compact('job'));
    }

    public function apply_job(Request $request){
        $code = str_random(10);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($code);
        $user->user_type = 'candidate';
        $user->save();


        $job = Job::find($request->job);

        $ja = new Activity();
        $ja->job_id = $job->id;
        $ja->user_id = $user->id;
        $ja->save();

        if($request->hasfile('cv'))
        {
            $file = $request->file('cv')->getClientOriginalName();
            $vitae = 'Temping Agency'.'-'.$user->id.'-'.$file;
            $path = $request->file('cv')->storeAs('vitae',$vitae,'s3');
            $cvUrl = Storage::disk('s3')->response('vitae/' . $vitae);
        }

        $cv = new CV();
        $cv->name = $user->name;
        $cv->email = $user->email;
        $cv->phone = $user->phone;
        $cv->cv = $vitae;
        $cv->user_id = $user->id;
        $cv->platform = 'Temping Agency';
        $cv->save();

        $mail = [
            'name' => $user->name,
            'email' =>$user->email,
            'phone' =>$user->phone,
            'code' => $code,
            'title' => $job->title,
            'location' => $job->location,
            'type' => $job->type,
            'company' => $job->company,
        ];

        Mail::to($user->email)->send(new Applied($mail));
        return redirect()->back()->with('success','Successfully Applied for this job!');

    }
}
