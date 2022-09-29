<?php
// Methods used in this file were from watching tutorials on https://www.youtube.com/c/IrebeLibrary
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Admin_user;
use App\Models\AuthorUser;
class UserAuthController extends Controller
{
    // View functions
    function AdminLogin(){
       return view('auth.admin-login');     
    }

    function AuthorLogin(){
        return view('auth.author-login'); 
    }

    function registerAdmin(){
        return view('auth.register-admin');
    }

    function registerAuthor(){
        return view('auth.register-author');
    }

    // function Validates and creates new admin user using the Admin_user model
    function createAdmin(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:admin_users',
            'password'=> 'required|min:5|max:12'
        ]);

        $user = new Admin_user;
        $user->name = $request->name;
        $user->email = $request->email;
        // Built-in Hash function hashes inputed password
        $user->password = Hash::make($request->password);

        $query = $user->save();

        if ($query){
            return back()->with('success', 'You have been successfully registered');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    // function Validates and creates new author user using the AuthorUser model
    function createAuthor(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:author_users',
            'password'=> 'required|min:5|max:12'
        ]);

        $user = new AuthorUser;
        $user->name = $request->name;
        $user->email = $request->email;
        // Built-in Hash function hashes inputed password
        $user->password = Hash::make($request->password);

        $query = $user->save();

        if ($query){
            return back()->with('success', 'You have been successfully registered');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    // function validates and check login creditials 
    function checkAdmin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = Admin_user::where('email','=', $request->email)->first();
        

        if ($user){
            // built-in hash function compares input password with one DB
            if(Hash::check($request->password, $user->password)){
                
                $request->session()->put('LoggedUser', $user->id);
                return redirect('admin');

            }else{
                return back()->with('fail', 'Invalid Password');
            }
        }else{
            return back()->with('fail', 'User does not exist');
        }

        
    }

    // function validates and check login creditials 
    function checkAuthor(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = AuthorUser::where('email','=', $request->email)->first();

        if ($user){
            // built-in hash function compares input password with one DB
            if(Hash::check($request->password, $user->password)){
                
                $request->session()->put('LoggedAuthor', $user->id);
                return redirect('author');

            }else{
                return back()->with('fail', 'Invalid Password');
            }
        }else{
            return back()->with('fail', 'User does not exist');
        }
    }

    // logsout users when logout button is clicked.
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }elseif(session()->has('LoggedAuthor')){
            session()->pull('LoggedAuthor');
            return redirect('/');
        }
    }
}
