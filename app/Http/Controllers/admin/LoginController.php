<?php

namespace App\Http\Controllers\Admin; //admin add

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // using controller class

class LoginController extends Controller {

    public function dashboard() {
        return \View::make('admin.templates.dashboard');
    }

    public function admin() {
        return \View::make('admin.templates.admin');
    }

}
