<?php
namespace App\Http\Controllers;
use Auth;
use Validator;
use App\User;
use App\Categories;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function add(Request $request){

        $request->validate([
           'firstname' => 'required',
           'lastname' => 'required',
           'email' => 'required|email|unique:users',
           'Phone_number' => 'required|min:10',
           'password' => 'required|min:3',
           'profile' => 'required|image|mimes:jpeg,bmp,png'
       ]);       
    
       $image = $request->file('profile');
       $name = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('dist/assets/img');
       $image->move($destinationPath, $name);  
       
    
    
       
                  $user = new User([
                      'firstname'    =>  $request->get('firstname'),
                      'lastname'    =>  $request->get('lastname'),
                      'email'     =>  $request->get('email'),
                      'phone_number'     =>  $request->get('Phone_number'),
                      'role'     =>$request->get('usertype'),
                      'level'     =>  '1',
                      'age'=>$request->get('age'),
                      'sex'=>$request->get('sex'),
                      'profile'  =>  $name,
                      'password'  =>  Hash::make($request->get('password')),
                      'status'=>'pending',
                      
                      ]);
                  $user->save(); 
    
            return redirect()->back()->with('message', 'Account created successfully !');
    
    }
   

    public function adduser(Request $request){

        $request->validate([
           'firstname' =>['required', 'string', 'max:255'],
           'lastname' => ['required', 'string', 'max:255'],
           'phone_number' => 'required',
           'age' => 'required',
           'sex' => 'required',
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
           'profile' => 'required|image|mimes:jpeg,bmp,png'
       ]);       
       
       $user = new User([
                      'firstname'  =>$request->get('firstname'),
                      'lastname'  =>  $request->get('lastname'),
                      'email'  =>  $request->get('email'),
                      'phone_number'  =>  $request->get('phone_number'),
                      'age'  =>  $request->get('age'),
                      'sex'  =>  $request->get('sex'),
                      'profile'  =>  'null',
                      'password'  =>  $request->get('password'),
                      ]);
                  $use->save(); 
   
            return redirect()->back()->with('message', $request->get('Firstname').'account is created successfully !!!');
       }   

       public function addclient(Request $request){

        $request->validate([
           'firstname' => 'required',
           'lastname' => 'required',
           'email' => 'required|email|unique:users',
           'Phone_number' => 'required|min:10',
           'password' => 'required|min:3',
           'profile' => 'required|image|mimes:jpeg,bmp,png'
       ]);       
    
       $image = $request->file('profile');
       $name = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('dist/assets/img');
       $image->move($destinationPath, $name);  
       
    
    
       
                  $user = new User([
                      'firstname'    =>  $request->get('firstname'),
                      'lastname'    =>  $request->get('lastname'),
                      'email'     =>  $request->get('email'),
                      'phone_number'     =>  $request->get('Phone_number'),
                      'role'     =>'client',
                      'level'     =>  '2',
                      'age'=>$request->get('age'),
                      'sex'=>$request->get('sex'),
                      'profile'  =>  $name,
                      'password'  =>  Hash::make($request->get('password')),
                      'status'=>'active',
                      
                      ]);
                  $user->save(); 
    
            return redirect()->back()->with('message', 'Account created successfully !');
    
    }
   
    
    public function showuser($id) {
 
        $ikiciro=Categories::get()->all();
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('EditUser',['users'=>$users])->with('ikiciro',$ikiciro);
        }


        public function updateuser(Request $request,$id) {
 
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $activate = $request->input('activate');
            $usertype = $request->input('role');
            $age = $request->input('age');
            $sex = $request->input('sex');

            DB::update('update users set firstname = ?,lastname=?,email=?,phone_number=?,level=?,role=?,age=?,sex=?,status=? 
            where id = ?',[$firstname,$lastname,$email,$phone_number,'1',$usertype,$age,$sex,$activate,$id]);
            return redirect()->back()->with('message', 'User is updated successfully !');
        }

}
