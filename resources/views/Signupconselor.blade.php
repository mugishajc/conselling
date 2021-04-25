@extends('layouts.app')

@section('content')

<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-0">
                                    <div class="card-body">
                                       
                                    @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(session()->has('message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif

<div class="alert alert-info">
Register as a conselor or Specialist/Expert
    </div>
                                       <br>
                                          <form method="post" action="{{ route('add') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Firstname</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="firstname" placeholder="Enter your firstname" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Lastname</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="lastname" type="text" placeholder="Enter your lastname" />
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Email</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="email"name="email" placeholder="Enter your Email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Choose your expertise/speciality</label>
                                                        <select required  name="usertype" id="usertype" class="form-control">

<option value=""disabled selected>--select your speciality or expertise--</option>
@foreach($ikiciro as $iki)
<option value="{{$iki->category_name}}">{{$iki->category_name}}</option>
@endforeach
 </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">{{ __('Phone Number') }}</label>
                                                <input name="Phone_number" class="form-control py-4"  required  autofocus id="inputEmailAddress" type="number" placeholder="Enter Telephone" />
                                            </div>

                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Age</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="age" placeholder="Enter your age" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Gender</label>
                                                        <select required  name="sex"  class="form-control">

<option value=""disabled selected>--select your gender--</option>

<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Both">Both</option>
<option value="Prefer not say">Prefer not say</option>

 </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="password">{{ __('Password') }}</label>
                                                <input name="password" class="form-control py-4" required id="password" type="password" placeholder="Enter password" />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="password">{{ __('Profile Photo') }}</label>
                                                <input type="file" id="input-file-now" class="dropify" name="profile" accept="image/jpeg,image/gif,image/png,image/x-eps" />
                                            </div>

                                    
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="#"></a>
                                                <Button class="btn btn-danger" name="signup">Signup</Button>
                                            </div>
                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <br>
        </div>



@endsection