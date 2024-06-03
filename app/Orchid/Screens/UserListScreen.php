<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\User;
use Orchid\Screen\Acrtions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;

class UserListScreen extends Screen
{
    public function query(): iterable
        {return ['users' => User::paginate()];}
    public function name(): ? string
        {return 'Users';}
    public function commandBar(): iterable 
        {return [Link::make('Create User')->icon('plus')->route('platform.user.create')]}
    
}
