@extends('layouts.main')
@section('content')

<div class=" bg-light">
    <br><br>
       <br><br><br>
       
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" >
             
            <h2 class="mb-5 h3 text-center">All Jobs</h2>
            <div class="rounded border jobs-wrap">
             
                @foreach($allJobs as $job)
                
                <?php
                $userId = $job->userId;
                $company = DB::table('users')->where('id', $userId)->first();
                ?>
                
              <a href="{{url('/job/'.$job->id)}}" class="job-item d-block d-md-flex align-items-center fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="{{asset('public/frontEnd/')}}/images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>{{$job->title}}</h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{$company->companyName}}</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> {{$job->location}},{{$job->country}}</div>
                     @if($job->salary == '')
                      <div><span class="icon-money mr-1"></span> Negotiable</div>
                     @else 
                     <div><span class="icon-money mr-1"></span> {{$job->salary}}</div>
                     @endif
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">Apply Now</span>
                  </div>
                </div>  
              </a>
                @endforeach

            </div>
             {{ $allJobs->links() }}
            
          </div>
          
        </div>
      </div>
       <br>
       <br><br><br>
</div>


@endsection

