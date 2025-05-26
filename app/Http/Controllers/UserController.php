<?php

namespace App\Http\Controllers;

use App\Models\User;
use ProtoneMedia\Splade\SpladeTable;

class UserController extends Controller
{
    public function index()
    {
        return view('users', [
            'users' => SpladeTable::for(User::class)
                ->column('id', __('ID'))
                ->column('name', label: __('Name'), sortable: true, searchable: true)
                ->column('email', __('E-Mail'))
                ->column('actions', __('Actions'))
                ->perPageOptions([15, 50, 100, 200])
                ->defaultSort('name')
                ->withGlobalSearch(__('Search...'), columns: ['name', 'email'])
                ->paginate(15),
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
