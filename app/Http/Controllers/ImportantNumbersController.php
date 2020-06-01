<?php

namespace App\Http\Controllers;

use App\Models\ImportantNumbers;
use Illuminate\Http\Request;

class ImportantNumbersController extends Controller
{
    public function index(){
        $importantNumbers = ImportantNumbers::paginate(10);
        return response()->json($importantNumbers);
    }
}
