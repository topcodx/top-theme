<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    /**
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * @param Request $request
     * @throws \Exception
     *
     * @return Application|Factory|View
     */
    public function dataTableIndex(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new UserDataTable())->get())->make(true);
        }

        return view('users.data-table-index');
    }

    public function horizontalTable(){
         return view('horizontal-users.index');
    }
}
