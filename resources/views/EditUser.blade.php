
@extends('dashboard.index')

@section('contentedituser')
<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->role}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            Edit User accounts
                             </li>
                        </ol>


                        <div class="col-md-15">
            <div class="card">
            
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

            <form method="POST" action="/edituser/<?php echo $users[0]->id; ?>">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">First Name</label>
                                                        <input class="form-control py-4" required id="inputFirstName" value = '<?php echo$users[0]->firstname; ?>' type="text"name="firstname" placeholder="Enter Firstname" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="lastname" value = '<?php echo$users[0]->lastname; ?>' type="text" placeholder="Lastname" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Email</label>
                                                        <input class="form-control py-4" required id="inputemail"value = '<?php echo$users[0]->email; ?>' type="text"name="email" placeholder="Email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Phone number</label>
                                                        <input class="form-control py-4"required id="inputphone" name="phone_number" type="number"value = '<?php echo$users[0]->phone_number; ?>' placeholder="Phone number" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Enter your age</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="age" value = '<?php echo$users[0]->age; ?>' placeholder="Enter your age" />
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="small mb-1" >Sex</label>
                                                        
                                                <div class="form-check">
  
  <input class="form-check-input" type="radio" name="sex" id="exampleRadios1" value="Male" >
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sex" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
                                                </div>
                                                
                                            </div>
</div>


                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">Manage account</label>
                                                        <select required  name="activate"  class="form-control">

<option value=""disabled selected>--select activate or deactivate account--</option>

<option value="active">Active</option>
<option value="blocked">Blocked</option>
<option value="pending">Pending</option>
 </select>

                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputfname"> Choose user Level</label>
                                                        
                                                <select required  name="role" id="usertype" class="form-control">

<option value=""disabled selected>--select User type--</option>
@foreach($ikiciro as $iki)
<option value="{{$iki->category_name}}">{{$iki->category_name}}</option>
@endforeach
 </select>
                                                </div>
                                            </div>
                            </div>
                        </div>

                                            
                                      
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button type="submit" class="btn btn-info" >{{ __('Register') }}</Button>
                                            
                                            </div>
                                        </form>
        
                                        <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Conselling system <?php echo date("Y");?></div>
                            <div>
                                &middot;
                                <a href="#">Academic project</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 

                                        @overwrite