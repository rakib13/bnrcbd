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
         $publishes = Publish::all(); // Or use pagination like Publish::latest()->paginate(9)
        // return view('publication', compact('publishes'));

        // Tareq change here......... for fetch data from db and show the form...

        $multimediaResources = Publish::where('tag', 'multimedia-resources')
            ->where('is_shown', '1')->get();
        $newsletters = Publish::where('tag', 'newsletters')
            ->where('is_shown', '1')->get();
        $conferenceProceedings = Publish::where('tag', 'conference-proceedings')
            ->where('is_shown', '1')->get();

            $feature = Publish::where('is_featured', '1')->get();

        return view('publication', compact('multimediaResources', 'newsletters', 'conferenceProceedings','feature','publishes'));
    }
}
