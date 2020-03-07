<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Finder &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.head')
    
  </head>
  <body>
  
  @include('includes.nav')

  <br>
  <br>
  <br>
     
    @include('includes.hero')
   
    
       
      @if ( session()->has('msg') )
        <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">

            <strong>{{ session()->get('msg') }}</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
       @endif
    
   <div class=" bg-light">
       <br>
       <br>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" >
            <h2 class="mb-5 h3">Recent Jobs</h2>
            @if(count($recentJobs) == 0)
            <hr><br>
            <h4 class="text-center text-danger">There is no job to show !!</h4>
            <br><hr>
            @else
            <div class="rounded border jobs-wrap">
             
                @foreach($recentJobs->shuffle()->slice(0, 5) as $job)
                
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
            @endif

            <div class="col-md-12 text-center mt-5">
              <a href="{{url('/jobs')}}" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
            </div>
          </div>
          
        </div>
      </div>
       <br>
       <br>
    </div>

      @include('includes.testimonial')

   @include('includes.footer')
    
    </body>
</html>