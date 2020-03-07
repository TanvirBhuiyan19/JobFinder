@extends('layouts.main')

@section('content')
<div class="site-wrap">
    <div style="height: 40px;"></div>
    <div class="site-section bg-light" style="margin-left: -0%;">
        <div class="container bg-white">

            <br>
            <div class="container">
            <div class="row">
            <div class="col-md-6">
                <h5>Title : {{$jobInfo->title}}</h5>
            </div>
                <div class="col-md-6">
                <h5 style="float:right" >Job Id : {{$jobInfo->id}}</h5>
                </div>
            </div>
            </div>
            <hr>

              @foreach($allApplication as $application)
              <?php
                $userId = $application->userId;
                $userDetails = DB::table('users')->where('id', $userId)->first();
                $userProfiles = DB::table('profiles')->where('userId', $userId)->first();
              ?>
              
              <div class="container">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-2">
                      <img src="{{asset('public/frontEnd/')}}/images/users/{{$userProfiles->avator}}" style="height: 50px; width: 50px;" alt="no image">
                  </div>
                  <div class="col-md-3">
                      <h6>{{$userDetails->first_name}} {{$userDetails->last_name}}</h6>
                  </div>
                  <div class="col-md-4">
                    <a href="{{asset('public/frontEnd/')}}/resume/{{$userProfiles->resume}}"   target="_blank" class="btn btn-sm btn-outline-success">View Resume</a>
                  </div>
                  <div class="col-md-2">
                    <a href="{{asset('profile')}}/{{$userId}}"   target="_blank" class="btn btn-sm btn-outline-warning">Visit Profile</a>
                  </div>
                     
                  </div>
                  </div>
              
              <hr>
              @endforeach
              
              </div>
        
            <br><br>

        </div>
    </div>
</div>

@endsection