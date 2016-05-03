<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(25);

        dd($users);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');

    }

    public function store(Request $request)
    {
        $this->validate($request ,[
            'first_name' => 'required',
            'second_name'=> 'required',
            'email' =>'required | email | unique',
            'password'=>'required',
            'highest_education_level'=>'required',
            'subjects_of_interest'=>'required',
            'username' =>'required | unique',
            'type' =>'required',
            'country'=>'required',
            'avatar' =>'required',
            'bio' => 'required'
        ]);

        User::create($request->all());

        return redirect('admin/users');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'first_name' => 'required',
            'second_name'=> 'required',
            'email' =>'required | email | unique',
            'password'=>'required',
            'highest_education_level'=>'required',
            'subjects_of_interest'=>'required',
            'username' =>'required | unique',
            'type' =>'required',
            'country'=>'required',
            'avatar' =>'required',
            'bio' => 'required'
        ]);

        $user = User::findOrFail($id);

        $user->update($request->all());

        //dd(user)
        //var_dump(echo 'you are genious dom);

        return redirect ('admin/users');
    }

    //delete a fucking user
    public function destroy($id)
    {
        $user = User::destroy($id);

        return redirect('admin/users');
    }

    //here goes the logic to suspend user

    public function suspend()
    {
        //write something dope Dom
    }


}
