<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
    }

    public function registration_list(Request $request) {
        $page = $request->get('page', 0);
        $limit = $request->get('limit', 0);

        $registrationList = Registration::get();

        return view('registration-list', ['registrationList' => $registrationList]);
    }
}
