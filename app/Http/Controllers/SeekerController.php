<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Profile;

class SeekerController extends Controller
{
    public function profile($id)
    {
        $userProfile = Profile::where('userId', $id)
                ->leftJoin('users', 'users.id', 'profiles.userId')
                ->first();
        
         return view('profile.seekerProfile', compact('userProfile'));
    }
    
    public function userProfile()
    {
        $id = Auth::user()->id;
        $userProfile = Profile::where('userId', $id)
                ->leftJoin('users', 'users.id', 'profiles.userId')
                ->first();
        
         return view('profile.seekerProfile', compact('userProfile'));
    }
    
    public function editProfile()
    {
        $id = Auth::user()->id;
        $userProfile = Profile::where('userId', $id)
                ->first();
        return view('profile.editProfile', compact('userProfile'));
    }
    
    public function saveProfile(Request $request)
    {
         $id = Auth::user()->id;
        $userProfile = Profile::where('userId', $id)->first();
        
        if($request->experience != ''){
           $experience = $request->input('experience');
        }else{
            $experience = $userProfile->experience;
         }
        
        if($request->bio != ''){
            $bio = $request->input('bio');
        }else{
            $bio = $userProfile->bio;
         }
         
        if($request->dob != ''){
            $dob = $request->input('dob');
        }else{
            $dob = $userProfile->dob;
         }
        
        if($request->address != ''){
            $address = $request->input('address');
        }else{
            $address = $userProfile->address;
         }
        
        if($request->avator != ''){
            $avator = $request->file('avator');
        $imageName = rand() . $avator->getClientOriginalName();
        $directory = 'public/frontEnd/images/users/';
        $avator->move($directory, $imageName);
        }else{
           $imageName = $userProfile->avator; 
        }
        
        if($request->resume != ''){
        $resume = $request->file('resume');
        $resumeName = $resume->getClientOriginalName();
        $directory = 'public/frontEnd/resume/';
        $resume->move($directory, $resumeName);
        }else{
           $resumeName = $userProfile->resume; 
        }
        
        $gender = $request->input('gender');
        
        DB::table('profiles')->where('userId', $id)->update(['address' => $address,'gender' => $gender,
            'dob' => $dob,'experience' => $experience,'bio' => $bio,'resume' => $resumeName,'avator' => $imageName]);
//        return redirect()->back()->with('msg','Profile updated successfully !!');
        return redirect('profile')->with('msg','Profile updated successfully !!');
    }
}
