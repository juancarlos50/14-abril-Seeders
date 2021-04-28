<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
class CompanieController extends Controller
{
    public function index(){
        // select * from companies
        //$companies = Companie::all();
        $companies = Companie::paginate(5);
        return view('companie.index',compact('companies'));
    }
}
