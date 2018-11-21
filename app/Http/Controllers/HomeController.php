<?php
/**
 * Created by PhpStorm.
 * User: osama
 * Date: 11/21/2018
 * Time: 12:48 PM
 */

namespace App\Http\Controllers;


use App\User;

class HomeController
{

    public function index()
    {
        return view('welcome');
    }
}