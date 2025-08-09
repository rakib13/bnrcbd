<?php

namespace App\Http\Controllers;

use App\Models\Leadership;

use Illuminate\Http\Request;

class LeadershipLegacyController extends Controller
{
    //
    public function index()
    {
        // return view('leadershipLegacy');

        $restoringdemocracy = Leadership::where('tag', 'restoring-democracy')->get();
        $socialdevelopment = Leadership::where('tag', 'social-development')->get();
        $economicesadvancment = Leadership::where('tag', 'economic-advancements')->get();
        $environmentalvision = Leadership::where('tag', 'environmental-vision')->get();
        $othersectors = Leadership::where('tag', 'other-sectors')->get();

        return view('leadershipLegacy', compact('restoringdemocracy', 'socialdevelopment', 'economicesadvancment', 'environmentalvision', 'othersectors'));
    }
}
