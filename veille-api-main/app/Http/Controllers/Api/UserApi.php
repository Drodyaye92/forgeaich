<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserApi extends Controller
{
    public function get() {
        $users = User::all();
        return $users;
    }
}
