<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('is-admin'))
        {
            $data['users'] = User::paginate(10);

            return view('backend.users.index', $data);
        }
        else
        {
            dd('Access denied');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::all();

        return view('backend.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $validated_data = $request->validated();

        $user = User::create($validated_data);

        $user->roles()->sync($request->roles);

        return redirect()->back()->with('success', 'User successfully added to the system ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data['user']  = User::find($id);

        if ($data['user'])
        {
            $data['roles'] = Role::all();

            return view('backend.users.show', $data);
        }
        else
        {
            $request->session()->flash('warning', 'User no longer exists in the system');

            return redirect(route('backend.users.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data['user']  = User::find($id);

        if ($data['user'])
        {
            $data['roles'] = Role::all();

            return view('backend.users.edit', $data);
        }
        else
        {
            $request->session()->flash('warning', 'User no longer exists in the system');

            return redirect(route('backend.users.index'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($user)
        {
            $user->update($request->except(['_token', 'roles']));
            $user->roles()->sync($request->roles);

            return redirect()->back()->with('success', 'User details updated successfully');
        }
        else
        {
            return redirect()->back()->with('warning', 'User does not exist in this system');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->back()->with('success', 'User removed from the system successfully');
    }

    /**
     * User forgot password view
     */
    public function forgot_password()
    {
        return view('forgot_password');
    }
}
