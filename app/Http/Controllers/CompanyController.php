<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
     public function createJob()
    {
        return view('jobs.jobPost');
    }
    
     public function editJob($id)
    {
        $jobInfo = Job::find($id);
        return view('jobs.editJob', compact('jobInfo'));
        
    }
    
     public function updateJob(Request $request)
    {
        $jobId = $request->jobId;
        $title = $request->title;
        $description = $request->description;
        $salary = $request->salary;
        $location = $request->location;
        $country = $request->country;
        DB::table('jobs')->where('id', $jobId)->update([ 'title' => $title ,
            'description' => $description , 'salary' => $salary , 'location' => $location , 'country' => $country ]);
        
       return redirect('dashboard')->with('msg','Job Updated successfully !!');
    }
    
     public function deleteJob($id)
    {
         DB::table('jobs')->where('id', $id)->delete();
        return redirect()->back()->with('msg','Job Deleted successfully !!');
    }
     public function applications($id)
    {
         $jobId = $id;
         $jobInfo = DB::table('jobs')->where('id', $jobId)->first();
         $allApplication = DB::table('applied_jobs')->where('jobId', $jobId)->get();
        return view('company.applications', compact('allApplication', 'jobInfo'));
    }
    
     public function dashboard()
    {
         $userId = Auth::user()->id;
         $jobs = DB::table('jobs')->where('userId', $userId)
            ->orderBy('id', 'DESC')->get();
        return view('company.dashboard', compact('jobs'));
    }

     public function saveJob(Request $request)
    {
         $userId = Auth::user()->id;
        $title = $request->input('title');
        $description = $request->input('description');
        $salary = $request->input('salary');
        $location = $request->input('location');
        $country = $request->input('country');
        DB::table('jobs')->insert(['userId' => $userId , 'title' => $title ,
            'description' => $description , 'salary' => $salary , 'location' => $location , 'country' => $country ]);
        
         return redirect('dashboard')->with('msg','Job Posted successfully !!');
    }
}
