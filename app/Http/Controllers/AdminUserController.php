<?php

namespace App\Http\Controllers;

use App\Http\Requests\userEditRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        // $user = User::create([
        //     'name' => $request['name'],
        //     'role_id' => $request['role_id'],
        //     'is_active' => $request['is_active'],
        //     'email' => $request['email'],
        //     'photo_id' => $request['photo_id'],
        //     'password' => Hash::make($request['password']),
        // ]);

        $input = $request->all();

        // if($request->file('photo_id')){
        //     return 'photo';
        // } else {
        //     return 'no photo';
        // }

        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
            $input['password'] = bcrypt($request['password']);
            $user = User::create($input);
            Photo::where('id', $photo->id)->update(array('user_id' => $user->id));
        } else {
            $input['password'] = bcrypt($request['password']);
            User::create($input);
        }
        Session::flash('add_new_user', 'New User Added Succesfully');
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all()->pluck('name', 'id');
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(userEditRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo_id')){
            if ($user->photo_id){
                $photo = Photo::findOrFail($user->photo->id);
                unlink(public_path() . $photo->file);
                $photo->delete();
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
            Photo::where('id', $photo->id)->update(array('user_id' => $user->id));
        }
        $user->update($input);
        Session::flash('update_user', 'The User Data update Succesfully');
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        unlink(public_path() . $user->photo->file);
        $user->delete();
        Session::flash('deleted_user', 'The User has been Deleted Succesfully');
        return redirect(route('users.index', compact('user')));
    }
}
