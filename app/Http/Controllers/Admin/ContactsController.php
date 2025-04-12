<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ContactsController extends Controller
{
    function index()
    {
        return view('admin.contacts');
    }
    function getData()
    {
        $contactData = DB::table('contact_us')
            ->select('*')
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();

        return DataTables::of($contactData)
            ->addIndexColumn()
            ->make(true);
    }
}
