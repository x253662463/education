<?php
/**
 * Creator: xie
 * Time: 2020/12/1
 */

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;

class UserController extends Controller
{
    public function login() {
        return view('user.login');
    }

    public function register() {
        return view('user.register');
    }

    public function loginAction(loginRequest $request) {
        if ($request->username) {

        }
    }

    public function registerAction() {
        return '12312';
    }
}
