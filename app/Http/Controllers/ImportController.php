<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function getImport() {
        return view('import');
    }

    public function postImport(Request $request) {
        $filename = $request->file('import_file');
        $file = fopen($filename, 'r');

        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            print_r($line);
        }

        fclose($file);
    }
}
