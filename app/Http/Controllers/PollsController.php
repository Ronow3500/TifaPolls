<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PollsImport;
use App\Models\Poll;
use Maatwebsite\Excel\Facades\Excel;

class PollsController extends Controller
{
    public function index()
    {
        return view('backend/import-form');
    }

    // Import Method
    public function import(Request $request)
    {
        // code...
        if ($request->file('file'))
        {
            //dd($request->file('file'));
            Excel::import(new PollsImport, $request->file('file'));

            return redirect()->back()->with('success', 'Import Successful!');
        }
        else
        {
            return redirect()->back()->with('error', 'That was an empty file upload');
        }
    }

    public function table()
    {
        $data['items'] = Poll::paginate(10);

        return view('backend/table', $data);
    }

    public function data_studio()
    {
        return view('backend/data_studio');
    }
}
