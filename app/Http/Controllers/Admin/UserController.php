<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\ReviewGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()
            ->where('is_admin', 0)
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('users.index', compact('users', $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ReviewGroup::all();

        return view('users.create', compact('categories', $categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password'], [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);

        User::create($validated)->reviewGroup()->sync($request->category);

        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $categories = ReviewGroup::all();

        return view('users.edit', ['user' => $user, 'categories' => $categories]);
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
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['confirmed'],
        ]);

        $updateData = [
            'name' => $validated['name'],
            'email' => $validated['email']
        ];

        if(isset($validated['password'])) {
            $updateData['password'] = Hash::make($validated['password'], [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]);
        }

        $user = User::find($id);

        $user->reviewGroup()->sync($request->category);

        $user->update($updateData);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
