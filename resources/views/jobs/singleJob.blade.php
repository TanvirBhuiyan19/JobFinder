@extends('layouts.main')

@section('content')
<div class="site-wrap">
    <div style="height: 40px;"></div>
    <div class="site-section bg-light" style="margin-left: -0%;">
        <div class="container bg-white" style="padding: 30px;" id="app">

            <h3 class="text-center">{{$singleJob->title}}</h3>
            <hr>
            @if ( session()->has('msg') )
            <p class="alert alert-success text-center">
                {{ session()->get('msg') }}
                        </p>
              @endif
                  <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-6">
                          <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-4"></div>
                               <div class="col-md-8 col-lg-8 col-sm-8  justify-content-start">
                                <h6>Company : {{$userInfo->companyName}}</h6> 
                                <h6>Email : {{$userInfo->email}}</h6> 
                                @if($singleJob->salary == '')
                                <h6>Salary : Negotiable</h6> 
                                @else
                                <h6>Salary : {{$singleJob->salary}}</h6> 
                                @endif
                               </div>
                           </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-sm-6">
                          <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-4"></div>
                               <div class="col-md-8 col-lg-8 col-sm-8  justify-content-start">
                                <h6>Location : {{$singleJob->location}}</h6> 
                                <h6>Country : {{$singleJob->country}}</h6> 
                               </div>
                           </div>
                      </div>
                      
                  </div><br>
                  
                  <div class="row">
                      <div class="col-md-1 col-lg-1 col-sm-1"></div>
                      <div class="col-md-10 col-lg-10 col-sm-10 text-justify">
                          <h5>Job Description</h5>
                          <p>{{$singleJob->description}}</p>
                      </div>
                      <div class="col-md-1 col-lg-1 col-sm-1"></div>
                  </div><br>
                  
                  @if(Auth::user()->type == 0)
                  
                  <div class="row" >
                      <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                          
<!--  <apply-component :jobid={{$singleJob->id}}></apply-component>                        
<button class="btn btn-success" disabled>Already Applied</button>-->

                          <?php
                            $id = Auth::user()->id;
                            $userInfo = DB::table('profiles')->where('userId', $id)->first();
                          ?>
                          @if($userInfo->resume == '')
                          <a href="{{url('/editProfile')}}" class="btn btn-success"> Apply This Job </a>
                          @else
                          <a href="{{url('/jobApply')}}/{{$singleJob->id}}" class="btn btn-success"> Apply This Job </a>
                          @endif
                      </div>
                  </div>    
                  @endif

        </div>
    </div>
</div>

@endsection