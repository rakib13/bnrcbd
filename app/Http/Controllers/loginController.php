<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Publish;
use App\Models\Leadership;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('dashboard.dashboard');
        // }

        // return back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ])->withInput();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // ✅ Return JSON if it's an AJAX request
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('dashboard.dashboard'),
                ]);
            }

            // fallback for non-AJAX
            $total_publishes = Publish::select('tag','is_featured')->where('is_deleted', false)->get();

            $total_leadership = Leadership::select('tag','is_featured')->where('is_deleted', false)->get();

            $count_total_feature = $count_total_newsletter = $count_total_conference_proceeding
                = $count_total_multimedia_resources = $count_total_leadership_legacy
                = $count_total_economic_advancements = $count_total_restoring_democracy
                = $count_total_social_development = $count_total_environmental_vision
                = $count_total_other = 0;

            foreach ($total_publishes as $publish) {
                if ($publish->is_featured)
                    $count_total_feature++;
                elseif ($publish->tag == 'newsletters')
                    $count_total_newsletter++;
                elseif ($publish->tag == 'conference-proceedings')
                    $count_total_conference_proceeding++;
                elseif ($publish->tag == 'multimedia-resources')
                    $count_total_multimedia_resources++;
            }

            foreach ($total_leadership as $publish) {
                if ($publish->is_featured)
                    $count_total_leadership_legacy++;
                elseif ($publish->tag == 'economic-advancements')
                    $count_total_economic_advancements++;
                elseif ($publish->tag == 'restoring-democracy')
                    $count_total_restoring_democracy++;
                elseif ($publish->tag == 'social-development')
                    $count_total_social_development++;
                elseif ($publish->tag == 'environmental-vision')
                    $count_total_environmental_vision++;
                else
                    $count_total_other++;
            }

            $object_total_counter = [
                $count_total_feature,
                $count_total_newsletter,
                $count_total_conference_proceeding,
                $count_total_multimedia_resources,
                $count_total_leadership_legacy,
                $count_total_economic_advancements,
                $count_total_restoring_democracy,
                $count_total_social_development,
                $count_total_environmental_vision,
                $count_total_other
            ];


            $publishes = Publish::select('tag','is_featured')->where('is_deleted', false)
                ->where('is_shown', true)
                ->get();

            $leaderships = Leadership::select('tag','is_featured')->where('is_deleted', false)
                ->where('is_shown', true)
                ->get();

            $count_feature = $count_newsletter = $count_conference_proceeding
                = $count_multimedia_resources = $count_leadership_legacy
                = $count_economic_advancements = $count_restoring_democracy
                = $count_social_development = $count_environmental_vision = $count_other = 0;

            foreach ($publishes as $publish) {
                if ($publish->is_featred)
                    $count_feature++;
                elseif ($publish->tag == 'newsletters')
                    $count_newsletter++;
                elseif ($publish->tag == 'conference-proceedings')
                    $count_conference_proceeding++;
                elseif ($publish->tag == 'multimedia-resources')
                    $count_multimedia_resources++;
            }

            foreach ($publishes as $publish) {
                if ($publish->is_featured)
                    $count_leadership_legacy++;
                elseif ($publish->tag == 'economic-advancements')
                    $count_economic_advancements++;
                elseif ($publish->tag == 'restoring-democracy')
                    $count_restoring_democracy++;
                elseif ($publish->tag == 'social-development')
                    $count_social_development++;
                elseif ($publish->tag == 'environmental-vision')
                    $count_environmental_vision++;
                else
                    $count_other++;
            }

            $object_counter = [
                $count_feature,
                $count_newsletter,
                $count_conference_proceeding,
                $count_multimedia_resources,
                $count_leadership_legacy,
                $count_economic_advancements,
                $count_restoring_democracy,
                $count_social_development,
                $count_environmental_vision,
                $count_other
            ];

            return redirect()->route('dashboard.dashboard', compact('object_total_counter', 'object_counter'));
        }

        // return JSON for AJAX
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials.',
            ], 401);
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


    public function dashboard()
    {
        $total_publishes = Publish::select('tag','is_featured')->where('is_deleted', false)->get();

        $total_leadership = Leadership::select('tag','is_featured')->where('is_deleted', false)->get();

        $count_total_feature = $count_total_newsletter = $count_total_conference_proceeding
            = $count_total_multimedia_resources = $count_total_leadership_legacy
            = $count_total_economic_advancements = $count_total_restoring_democracy
            = $count_total_social_development = $count_total_environmental_vision
            = $count_total_other = 0;

        foreach ($total_publishes as $publish) {
            if ($publish->is_featured)
                $count_total_feature++;
            elseif ($publish->tag == 'newsletters')
                $count_total_newsletter++;
            elseif ($publish->tag == 'conference-proceedings')
                $count_total_conference_proceeding++;
            elseif ($publish->tag == 'multimedia-resources')
                $count_total_multimedia_resources++;
        }

        foreach ($total_leadership as $publish) {
            if ($publish->is_featured)
                $count_total_leadership_legacy++;
            elseif ($publish->tag == 'economic-advancements')
                $count_total_economic_advancements++;
            elseif ($publish->tag == 'restoring-democracy')
                $count_total_restoring_democracy++;
            elseif ($publish->tag == 'social-development')
                $count_total_social_development++;
            elseif ($publish->tag == 'environmental-vision')
                $count_total_environmental_vision++;
            else
                $count_total_other++;
        }

        $object_total_counter = [
            $count_total_feature,
            $count_total_newsletter,
            $count_total_conference_proceeding,
            $count_total_multimedia_resources,
            $count_total_leadership_legacy,
            $count_total_economic_advancements,
            $count_total_restoring_democracy,
            $count_total_social_development,
            $count_total_environmental_vision,
            $count_total_other
        ];


        $publishes = Publish::select('tag','is_featured')->where('is_deleted', false)
            ->where('is_shown', true)
            ->get();

        $leaderships = Leadership::select('tag','is_featured')->where('is_deleted', false)
            ->where('is_shown', true)
            ->get();

        
            $count_feature = $count_newsletter = $count_conference_proceeding
            = $count_multimedia_resources = $count_leadership_legacy
            = $count_economic_advancements = $count_restoring_democracy
            = $count_social_development = $count_environmental_vision = $count_other = 0;

        foreach ($publishes as $publish) {
            if ($publish->is_featred)
                $count_feature++;
            elseif ($publish->tag == 'newsletters')
                $count_newsletter++;
            elseif ($publish->tag == 'conference-proceedings')
                $count_conference_proceeding++;
            elseif ($publish->tag == 'multimedia-resources')
                $count_multimedia_resources++;
        }

        foreach ($publishes as $publish) {
            if ($publish->is_featured)
                $count_leadership_legacy++;
            elseif ($publish->tag == 'economic-advancements')
                $count_economic_advancements++;
            elseif ($publish->tag == 'restoring-democracy')
                $count_restoring_democracy++;
            elseif ($publish->tag == 'social-development')
                $count_social_development++;
            elseif ($publish->tag == 'environmental-vision')
                $count_environmental_vision++;
            else
                $count_other++;
        }

        $object_counter = [
            $count_feature,
            $count_newsletter,
            $count_conference_proceeding,
            $count_multimedia_resources,
            $count_leadership_legacy,
            $count_economic_advancements,
            $count_restoring_democracy,
            $count_social_development,
            $count_environmental_vision,
            $count_other
        ];

        return  view('dashboard.dashboard', compact('object_total_counter', 'object_counter'));
        // return response()->json($object_counter);
        //return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
