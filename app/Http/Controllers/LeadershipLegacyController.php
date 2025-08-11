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

        $restoringdemocracy = Leadership::where('tag', 'restoring-democracy')
        ->where('is_shown', '1')->get();
        $socialdevelopment = Leadership::where('tag', 'social-development')
        ->where('is_shown', '1')->get();
        $economicesadvancment = Leadership::where('tag', 'economic-advancements')
        ->where('is_shown', '1')->get();
        $environmentalvision = Leadership::where('tag', 'environmental-vision')
        ->where('is_shown', '1')->get();
        $othersectors = Leadership::where('tag', 'other-sectors')
        ->where('is_shown', '1')->get();

        $feature = Leadership::where('is_featured', '1')->get();

        return view('leadershipLegacy', compact('restoringdemocracy', 'socialdevelopment', 'economicesadvancment', 'environmentalvision', 'othersectors','feature'));
    }
}
