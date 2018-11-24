<?php

namespace App\Http\Controllers;

use App\DataTables\ClientDataTable;
use App\DataTables\UserDataTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('client');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(UserDataTable $dataTable)
    {

        return view('dashboard');
    }


}
