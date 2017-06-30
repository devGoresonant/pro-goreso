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

    public function doLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required|max:30',
            'password' => 'required',
                ], [

            'username.required' => ' The username field is required.',
            'password.required' => ' The password field is required.',
        ]);
        dd($request->input('password'));
    }

}
