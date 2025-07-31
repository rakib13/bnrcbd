<?php

namespace App\Http\Controllers;
use App\Models\Publish;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //
    public function index()
    {
        //return view('publication');
        $publishes = Publish::all(); // Or use pagination like Publish::latest()->paginate(9)
        return view('publication', compact('publishes'));
    }
}
