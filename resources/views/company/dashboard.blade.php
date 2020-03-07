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
                <h5>User : {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
            </div>
                <div class="col-md-6">
                <h5 style="float:right" >Company : {{Auth::user()->companyName}}</h5>
                </div>
            </div>
            </div>
            <hr>
            
            @if ( session()->has('msg') )
            <p class="alert alert-success text-center">
                {{ session()->get('msg') }}
            </p>
            @endif

              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">Job Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Applications</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($jobs) == '')
                    <tr>
                      <th scope="row" colspan="6" style="text-align: center">There is no Jobs to show .</th>
                    </tr>
                  @else
                 @foreach($jobs as $job)
                 
                <tr>
                    <th scope="row" style="width:75px">{{$job->id}}</th>
                    <td style="width:150px;">{{$job->title}}</td>
                    <td class="text-justify">{{$job->description}}</td>
                    @if($job->salary == '')
                    <td class="text-justify">Negotiable</td>
                    @else
                    <td class="text-justify">{{$job->salary}}</td>
                    @endif
                    
                    <?php
                    $jobId = $job->id;
                        $allApplication = DB::table('applied_jobs')->where('jobId', $jobId)->get();
                    ?>
                    <td class="text-center"><a href="{{url('/applications/'.$job->id)}}"  target="_blank">{{count($allApplication)}}</a></td>
                    
                    <td style="width:145px;">
                        <a href="{{url('/editJob/'.$job->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                        <a href="{{url('/deleteJob')}}/{{$job->id}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you want to delete this Job ? ');">Delete</a>
                    </td>
                </tr>
                
                 @endforeach 
                 @endif 
                </tbody>
              </table>

            <br><br>


        </div>
    </div>
</div>

@endsection