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
        $job->location = isset($request->location)?$request->location:'';
        $job->type = isset($request->jobtype)?$request->jobtype:'';
        $job->message = $request->message;
        $job->description = isset($request->desc)?$request->desc:'';
        $job->appEmail = $request->appEmail;
        $job->company = $request->company;
        $job->website = isset($request->website)?$request->website:'';
        $job->tagline = isset($request->tagline)?$request->tagline:'';
        $job->video = isset($request->video)?$request->video:'';
        $job->twitter = isset($request->twitterUsername)?$request->twitterUsername:'';
        $job->user_id = $user->id;
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
        ];

        Mail::to($user->email)->send(new MailJob($mail));
        return redirect()->back()->with('success','Congratulations! Your Job has been uploaded');
    }

    public function jobs(){
        $jobs = Job::all();
        return view('career',compact('jobs'));
    }

    public function job_detail($id){
        $job = Job::find($id);
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
