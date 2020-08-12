<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\CV;
use App\Job;
use App\Mail\Mail as Mailer;

class WebController extends Controller
{
    public function cvUpload(Request $request){
        $code = str_random(10);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($code);
        $user->user_type = 'candidate';
        $user->save();

        $cv = new CV();
        $cv->name = $user->name;
        $cv->image = $request->image;
        $cv->email = $user->email;
        $cv->phone = $user->phone;
        $cv->address = $request->address;
        $cv->location = $request->location;
        $cv->category = $request->category;
        $cv->pref_temporary = $request->choice;
        $cv->availability = $request->availability;
        $cv->expected_salary = $request->salary;
        $cv->cv = $request->cv;
        $cv->user_id = $user->id;
        $cv->platform = 'Temping Agency';
        $cv->save();

        $mail = [
            'name' => $cv->name,
            'info' => 'Recieved',
            'code' => $code,
        ];

        Mail::to($user->email)->send(new Mailer($mail));
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
        return $request;
    }
}
