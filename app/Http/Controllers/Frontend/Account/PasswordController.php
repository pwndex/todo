<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('Frontend.account.password');
    }
}
