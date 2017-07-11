<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function getImport() {
        return view('import');
    }

    public function postImport(Request $request) {
        // dd($_POST);
        // EDISON: PUT YOUR CODE HERE


    }
}
