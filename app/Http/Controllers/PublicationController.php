<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Publish;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //
    public function index()
    {
        //return view('publication');
        // $publishes = Publish::all(); // Or use pagination like Publish::latest()->paginate(9)
        // return view('publication', compact('publishes'));

        // Tareq change here......... for fetch data from db and show the form...

        $multimediaResources = Publish::where('tag', 'Multimedia Resource')->get();
        $newsletters = Publish::where('tag', 'newsletters')->get();
        $conferenceProceedings = Publish::where('tag', 'Conference Proceedings')->get();

        return view('publication', compact('multimediaResources', 'newsletters', 'conferenceProceedings'));
    }
}
