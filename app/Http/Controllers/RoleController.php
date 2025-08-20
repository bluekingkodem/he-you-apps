<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create(User $user)
    {
        return view('role.create');
    }

     public function store(RoleRequest $request, User $user)
    {
        Role::create($request->validated());

        return redirect()->route('role.create')->with('success', "le role a bien ete cree");
    }

    public function edit(Role $role)
    {
        return view('role.edit', ['role' => $role]);
    }

    public function update(Role $role, RoleRequest $request)
    {
        $role->update($request->validated());

        return redirect()->route('role.edit', ['role'=>$role])->with('success', 'le role a bien ete modifie');
    }

    public function list()
    {
        $role = Role::paginate(3);

        return view('role.list', ['role' => $role]);
    }

    function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.list')->with('success', 'Le role a ete supprimé avec succès.');
    }

}
