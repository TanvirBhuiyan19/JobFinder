<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Job;

class JobController extends Controller
{
    public function singleJob($id)
    {
        $singleJob = DB::table('jobs')->where('id', $id)->first();
        
        $userId = $singleJob->userId;
        $userInfo = DB::table('users')->where('id', $userId)->first();
        return view('jobs.singleJob', compact('singleJob', 'userInfo'));
    }
    
    public function allJobs()
    {
        $allJobs = Job::paginate(40);
        return view('jobs.allJobs', compact('allJobs'));
    }
    
    public function jobApply($id)
    {
        $userId = Auth::user()->id;
        DB::table('applied_jobs')->insert(['userId' => $userId , 'jobId' => $id ]);
        return redirect()->back()->with('msg','Job Applied successfully !!');
    }
}
