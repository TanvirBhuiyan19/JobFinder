@extends('layouts.main')

@section('content')
<div class="site-wrap">
    <div style="height: 40px;"></div>
    <div class="site-section bg-light" style="margin-left: -0%;">
        <div class="container bg-white" style="padding: 30px;">

            <h2 class="text-center">EDIT JOB</h2>
            <hr>
            @if ( session()->has('msg') )
            <p class="alert alert-success text-center">
                {{ session()->get('msg') }}
                        </p>
              @endif

              
              <form  method="POST" action="{{url('updateJob')}}">
                 @csrf
                 <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                    <h5>Title</h5>
                                    <input type="text" placeholder="Job title" name="title" value="{{$jobInfo->title}}" style="width: 450px" required>
                                    <input type="hidden" name="jobId" value="{{$jobInfo->id}}" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                    <h5>Description</h5>
                                    <textarea name="description" placeholder="Job Description" rows="8" style="width: 450px" required>{{$jobInfo->description}}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                    <h5>Salary</h5>
                                    @if($jobInfo->salary == '')
                                    <input type="number" name="salary" placeholder="Negotiable" style="width: 450px">
                                    @else
                                    <input type="number" name="salary" value="{{$jobInfo->salary}}" style="width: 450px">
                                    @endif
                                     </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                    <h5>Location</h5>
                                    <input type="text" placeholder="Job location" value="{{$jobInfo->location}}" name="location" style="width: 450px" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                    <h5>Country</h5>
                                    <input type="text" placeholder="Job country" value="{{$jobInfo->country}}" name="country" style="width: 450px" required>
                                </div>
                            </div>
                            <br>

                        </div>
                        <button type="submit" class="btn btn-success btn-block" style="width: 90%;margin-left: 5%;"> UPDATE JOB</button>


                    </div>
            </form>




        </div>
    </div>
</div>

@endsection