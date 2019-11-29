<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function bestelling($bestelling = 'geen bestellingen') {
      return view('mijnaccount', ['bestelling' => $bestelling]);
    }

    public function instelling() {
      return view('mijnaccount');
    }

    public function view() {
      return view('mijnaccount');
    }
 }
