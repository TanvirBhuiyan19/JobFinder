@extends('layouts.main')

@section('content')

              
<div class="site-wrap">
    <div style="height: 40px;"></div>
    <div class="site-section bg-light" style="margin-left: -0%;">
        
 @if ( session()->has('msg') )
    <p class="alert alert-success text-center">
        {{ session()->get('msg') }}
    </p>
 @endif
        
        <div class="container bg-white" style="padding: 30px;">
          
          <div class="row" style="margin-left:15%;">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-thumbnail" style="height: 150px;width: 150px;float: right;border-radius: 15px;" 
                     src="{{asset('public/frontEnd/')}}/images/users/{{$userProfile->avator}}" alt="Images Not Found. Please upload an Image."> 
              </div>
              <div class="col-lg-7 col-md-7 col-sm-7">
                  @if(Auth::user()->id == $userProfile->userId)
                  <a href="{{url('editProfile')}}" class="btn btn-sm btn-outline-danger" style="float: right;">Edit Profile</a>
                  @endif
                <h3 style="margin-bottom: 10px;">{{$userProfile->first_name.' '.$userProfile->last_name}}</h3>
                <h6>Gender : {{$userProfile->gender}}</h6>
                <h6>DOB : {{$userProfile->dob}}</h6>
                <h6>Email : {{$userProfile->email}}</h6>
                
            </div> 
        </div>
            <hr>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                    <h3>About</h3>
                    <p style="text-align:justify ;">{{$userProfile->bio}}</p>
                </div> 
            </div>
            <br>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                    <h3>Skills</h3>
                    <h6>{{$userProfile->experience}}</h6>
                    
<!--                    <ul style="margin-left: -40px;">
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">HTML</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">CSS</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">Bootstrap</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">Wordpress</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">PHP</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">Laravel</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">Java Script</li>
                        <li class="btn btn-outline-info" style="float: left;list-style: none;padding: 5px;margin-right: 5px;">Vue JS</li>
                    </ul>-->
                </div>    
            </div>
             <br>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                    <h4>RESUME</h4>
                    @if($userProfile->resume == '')
                    <button  class="btn btn-sm btn-outline-success">Download Resume</button> No Resume Uploaded.
                    @else
                    <a href="{{asset('public/frontEnd/')}}/resume/{{$userProfile->resume}}"   target="_blank" class="btn btn-sm btn-outline-success">View Resume</a> {{$userProfile->resume}}
                    @endif
                    
                </div>
            </div>    
                 
             <br>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                  <h3>Address</h3>
                  <h6>{{$userProfile->address}}</h6>
                </div>
            </div>    
          
      </div>
    </div>
        </div>

@endsection