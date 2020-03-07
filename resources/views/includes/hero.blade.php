<div class="site-blocks-cover overlay inner-page" style="background-image: url('{{asset('public/frontEnd/')}}/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">Your Dream Job</h1>
            <p class="h3 text-white mb-5">Is Waiting For You</p>
          
            @guest
            <p><a href="{{route('register')}}" class="btn btn-outline-success py-3 px-4">Find Jobs</a> 
               <a href="{{route('employer-register')}}" class="btn btn-outline-warning py-3 px-4">Post A Job</a></p>
            @else
            @if(Auth::user()->type == 0)
            <p><a href="{{url('/jobs')}}" class="btn btn-outline-success py-3 px-4">Find Jobs</a> 
                <a  class="btn btn-outline-warning py-3 px-4">Post A Job</a></p>
            @else 
            <p><a class="btn btn-outline-success py-3 px-4">Find Jobs</a> 
                <a href="{{url('/jobPost')}}" class="btn btn-outline-warning py-3 px-4">Post A Job</a></p>
            @endif
            @endguest
            
          </div>
        </div>
      </div>
    </div>