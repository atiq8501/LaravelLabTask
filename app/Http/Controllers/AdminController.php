<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
    public function addEmployee(){
        return view('admin.addemployee');
    }

    public function insertEmployee(Request $req){

        $req->validate([
            'name'=>'required',
            'username'=>'required',
            'contact'=>'required',
            'password'=>'required|min:4'
        ]);

        $name=$req->name;
        $contact=$req->contact;
        $username=$req->username;
        $password=$req->password;

        $user= new User();
        $user->username=$username;
        $user->password=$password;
        $user->type=2;
    
        $employee=new Employee();
        $employee->name=$name;
        $employee->contact=$contact;
        $employee->username=$username;
        $employee->password=$password;

        if($employee->save() && $user->save()){
            return redirect()->route('admin.index');
        }
        else{
            return redirect('admin.addemployee');
        }
    }

}
