@extends('layouts.main')

@section('content')
<div class="site-wrap">
    <div style="height: 40px;"></div>
    <div class="site-section bg-light" style="margin-left: -0%;">
        <div class="container bg-white" style="padding: 30px;">

            <h2 class="text-center">PROFILE EDIT</h2>
            <hr>
           
       <?php
        $id = Auth::user()->id;
        $userInfo = DB::table('profiles')->where('userId', $id)->first();
      ?>
      @if($userInfo->resume == '')
        <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">

            <strong>You have to upload your resume before apply any job.</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
       @endif

              <form  method="POST" action="{{url('saveProfile')}}" enctype="multipart/form-data">
                 @csrf
                      <div class="row">
                
        
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                           <img class="img-thumbnail" style="height: 150px;width: 150px;float: right;border-radius: 15px;" 
                            src="{{asset('public/frontEnd/')}}/images/users/{{$userProfile->avator}}" alt="Images Not Found. Please upload an Image."> 
                            </div> 
                            <div class="col-lg-5 col-md-5 col-sm-5" style="margin-top: 5%">
                                <h6>Change Image</h6>
                                <input type="file" name="avator" accept="images/*" class="btn btn-sm btn-outline-danger">
                            </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                                    <h5>Gender</h5>
                                    @if($userProfile->gender == 'female')
                                    <input type="radio" name="gender" value="male"  >Male
                                    <input type="radio" name="gender" value="female" checked="checked">Female
                                    @else
                                    <input type="radio" name="gender" value="male" checked="checked" >Male
                                    <input type="radio" name="gender" value="female">Female 
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                                    <h5>Date of Birth</h5>
                                    <input type="date" name="dob" value="{{$userProfile->dob}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                                    <h5>About</h5>
                                    <textarea name="bio" rows="4" cols="40">{{$userProfile->bio}}</textarea>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                                    <h5>Address</h5>
                                    <textarea name="address" rows="4" cols="40">{{$userProfile->address}}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                                    <h5>Skills</h5>
                                    <textarea name="experience" rows="4" cols="40">{{$userProfile->experience}}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 offset-1">
                                    <h5>Upload Resume</h5>
                                    {{$userProfile->resume}}
                                    <input class="btn btn-sm btn-outline-success" name="resume" type="file" accept=".pdf,.docx">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success btn-block" style="width: 90%;margin-left: 5%;"> Update</button>


                    </div>
            </form>




        </div>
    </div>
</div>

@endsection