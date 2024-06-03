<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

public function_construct ()
{
    $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    $this->middleware('role:manager')->only(['index', 'show']);
}

class UserController extends Controller
{
    //
}
