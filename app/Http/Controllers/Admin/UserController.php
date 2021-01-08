<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

}
