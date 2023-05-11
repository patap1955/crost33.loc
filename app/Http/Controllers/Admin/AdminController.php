<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke() {
        $contacts = Contact::all()->sortByDesc("id")->take(10);
        return view("admin.pages.index", compact("contacts"));
    }
}
