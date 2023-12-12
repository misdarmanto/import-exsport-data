<?php

namespace App\Http\Controllers;

use App\Exports\SubsidiBbmsExport;
use App\Imports\SubsidiBbmsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\SubsidiBbm;

class SubsidiBbmController extends Controller
{
    public function index()
    {
        $subsidiBbm = SubsidiBbm::all();

        return view('subsidiBbm.index', compact('subsidiBbm'));
    }

    public function export()
    {
        return Excel::download(new SubsidiBbmsExport, 'subsidiBbm.xlsx');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new SubsidiBbmsImport, $file);

        return redirect()->route('subsidiBbm.index')->with('success', 'Data imported successfully.');
    }
}
