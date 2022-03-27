<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //dd('UserController@index');

        //$users = User::where('name', 'LIKE', "%{$request->search}%")->get();

        //igual a pesquisa acima

        $search = $request->search;
        $users = User::where(function ($query) use ($search) {

            if ($search) {
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
            
        })->get();

        return view('users.index', compact('users'));

    }

    public function show($id)
    {
        
        //$user = User::where('id', $id)->first();

        if (!$user = User::find($id))
            return redirect()->route('users.index');
        
        //dd($user);
        //dd('users.show', $id);

        return view('users.show', compact('user'));

    }

    public function create()
    {

        return view('users.create');

    }

    public function store(StoreUpdateUserFormRequest $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        return redirect()->route('users.index');

        //uma outra alternativa
        //return redirect()->route('users.show, $user->id');

        //outra forma não recomendada
        //$user = new User;
        //$user->name = $request->name;
        //$user->email = $request->email;
        //$user->password = $request->password;
        //|$user->save()

    }

    public function edit($id)
    {

        if (!$user = User::find($id))
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));


    }

    public function update(Request $request, $id)
    {

        if (!$user = User::find($id))
            return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index');

        //$user->update($request->all());

    }

}
