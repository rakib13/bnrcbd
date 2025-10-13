<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Publish;
use App\Models\Leadership;

use App\Mail\FeedbackMail;

class IndexController extends Controller
{
    // index page
    function index()
    {
        return view('index');
    }

    // About US Page
    public function about()
    {
        return view('about');
    }

    // Research and publications 
    public function publication()
    {
        $publishes = Publish::all(); // Or use pagination like Publish::latest()->paginate(9)

        $multimediaResources = Publish::where('tag', 'multimedia-resources')
            ->where('is_shown', '1')->get();
        $newsletters = Publish::where('tag', 'newsletters')
            ->where('is_shown', '1')->get();
        $conferenceProceedings = Publish::where('tag', 'conference-proceedings')
            ->where('is_shown', '1')->get();

        $feature = Publish::where('is_featured', '1')->get();

        return view('publication', compact('multimediaResources', 'newsletters', 'conferenceProceedings', 'feature', 'publishes'));
    }

    // Leadesrship LEgacy
    public function leadershipLegacy()
    {
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

    // Share you thought 
    public function shareYourThought()
    {
        return view('shareYourThought');
    }

    // Send Feedback
    public function sendFeedback(Request $request)
    {
        if ($request->has('anonymous_check')) {
            $request->validate([
                'anonymous_feedback' => 'required|string',
                'anonymous_file' => 'nullable|file|max:2048',
                'agree_terms' => 'accepted',
            ]);
        } elseif ($request->has('recognized_check')) {
            $request->validate([
                'recognized_feedback' => 'required|string',
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'mobile' => 'required|string|max:20',
                'recognized_file' => 'nullable|file|max:2048',
                'agree_terms' => 'accepted',
            ]);
        } else {
            return back()->withErrors(['error' => 'Please select a submission type.']);
        }

        // Send mail with form data
        // Mail::to('info@bnrcbd.org')->send(new FeedbackMail($request->all()));
        Mail::to('rakib.omar13@gmail.com')->send(new FeedbackMail($request->all()));

        return back()->with('success', 'Thank you! Your feedback has been sent.');
    }
    
}
