<?php

namespace App\Http\Controllers;

use App\DataTables\ClientDataTable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminPanel(ClientDataTable $dataTable)
    {

        return $dataTable->render('admin_panel');
    }
}
