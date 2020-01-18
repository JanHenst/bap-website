<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;

class CompanyController extends Controller
{
    public function list()
    {
      // $companies = DB::table('companies')->orderBy('name')->get();
      // $companies = DB::table('companies')->where('country','=','Bahamas')->where('city','Middelkerke')->get();

      $companies = Company::all();
      return view('company.list', ['bedrijven' => $companies]);
    }

    public function details($id)
    {
      // $company = DB::table('companies')->where('id','=', $id)->first();
      // $company = DB::table('companies')->find($id);

      $company = Company::find($id);
      return view('company.details', ['bedrijf' => $company]);
    }

}
