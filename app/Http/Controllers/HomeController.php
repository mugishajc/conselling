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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.Main');
        
    }

    
  public function logout(){
    //dd('logout');
auth()->logout();

return view('auth.login')->with('error','Logged out successfully');
}

public function viewusers(){
    
    $users=DB::select("select * from users EXCEPT select * from users where level='0' ");
    
    return view('dashboard.manageuser')->with('users',$users);

}
public function addconselor(){
    
    $ikiciro=Categories::get()->all();
    return view('dashboard.addconselor')->with('ikiciro',$ikiciro);
}


public function adduser(Request $request){

    $request->validate([
       'firstname' => 'required',
       'lastname' => 'required',
       'email' => 'required|email|unique:users',
       'Phone_number' => 'required|min:10',
       'password' => 'required|min:3',
       'usertype' => 'required',
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
                  'status'=>'active',
                  ]);
              $user->save(); 

        return redirect()->back()->with('message', 'Account created successfully !');

}





public function destroyuser($id) {
    DB::delete('delete from users where id = ?',[$id]);
    return redirect()->back()->with('message', 'User is deleted successfully !');
  
    }

    
public function destroycategory($id) {
    DB::delete('delete from categories where id = ?',[$id]);
    return redirect()->back()->with('message', 'User is deleted successfully !');
  
    }



    public function createcategory(){
        $categories=Categories::get()->all();
    
            return view('dashboard.managecategory')->with('tags',$categories);
        
        }


        public function addcategory(Request $request){

            $request->validate([
               'category_name' => 'required|unique:categories',
               'description' => 'required'
           ]);       
    
           $user_id=auth()->user()->id;
           $fname=auth()->user()->firstname;
           $lname=auth()->user()->lastname;
                     $cat = new Categories([
                          'user_id'    =>$user_id,
                          'doneby'    =>$fname . $lname,
                          'category_name'  =>  $request->get('category_name'),
                          'description'  =>  $request->get('description')
                          ]);
                      $cat->save(); 
       
                return redirect()->back()->with('message', $request->get('category_name').' category is registered successfully !');
       
       }
    

}
