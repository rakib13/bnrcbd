<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\UserInfo;
use App\Models\Publish;
use App\Models\Leadership;
use App\Models\LoginVerification;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Find user by email
        $user = UserInfo::where('email', $credentials['email'])->first();

        if (!$user || $user->is_deleted) {
            return $this->sendLoginError($request, 'Invalid credentials.');
        }

        // Check password
        if (!Hash::check($credentials['password'], $user->password)) {
            return $this->sendLoginError($request, 'Invalid credentials.');
        }

        // Check if inactive
        if ($user->is_active == 0) {
            return $this->sendLoginError($request, 'Your account is inactive. Please contact admin.');
        }


        // GENERATE Verificaiton Code / OTP
        $this->generateOTP($user->id);
        // return $this->sendLoginError($request, 'OTP Generated ' . $user->id);

        // SEND code to WHatsapp

        $authLogin = $this->sendToWhatapp($user->id);
        if (!$authLogin) {
            return $this->sendLoginError($request, 'Unable to send OTP.');
        }
        // return $this->sendLoginError($request, 'OTP Generated ' . $authLogin->otp);

        // Load OTP Form

        // $done = $this->verifyOTP($user->id, $authLogin->otp);
        // if ($done == null)
        //     return $this->sendLoginError($request, 'Invalid OTP.');

        // Login active user
        // Auth::login($user);
        // $request->session()->regenerate();

        // if ($request->ajax()) {
        //     return response()->json([
        //         'success' => true,
        //         'redirect_url' => route('dashboard.dashboard'),
        //     ]);
        // }

        // return redirect()->route('dashboard.dashboard');
        // return redirect()->route('otp.form', ['user_id' => $user->id]);
        // ✅ Instead of verifying OTP immediately, redirect to OTP form
        return response()->json([
            'success' => true,
            'redirect_url' => route('otp.form', ['user_id' => $user->id])
        ]);
    }

    private function sendLoginError($request, $message)
    {
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => $message,
            ], 401);
        }

        return back()->withErrors(['email' => $message])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function generateOTP($user_id)
    {
        $otp = rand(100000, 999999);

        $loginVerificaion = LoginVerification::where('user_infos_id', $user_id)
            ->first();

        if ($loginVerificaion == null)
            $loginVerificaion = new LoginVerification;

        $loginVerificaion->user_infos_id = $user_id;
        $loginVerificaion->otp = $otp;
        $loginVerificaion->is_verified = 0;
        $loginVerificaion->save();
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'otp' => 'required|string',
        ]);

        $loginVerification = LoginVerification::where('user_infos_id', $request->user_id)
            ->where('otp', $request->otp)
            ->first();

        if (!$loginVerification) {
            // return back()->withErrors(['Invalid OTP. Please try again.']);
            return response()->json(['success' => false, 'message' => 'Invalid OTP. Please try again.']);
        }

        // Mark verified
        $loginVerification->is_verified = true;
        $loginVerification->save();
        $loginVerification->delete();

        // Log user in
        $user = UserInfo::find($request->user_id);
        Auth::login($user);
        $request->session()->regenerate();


        // return redirect()->route('dashboard.dashboard');
        return response()->json([
            'success' => true,
            'message' => 'OTP verified successfully.',
            'redirect_url' => route('dashboard.dashboard')
        ]);
    }

    public function sendToWhatapp($user_id) // SEnd OTP to the mail for NOw
    {
        $loginVerificaion = LoginVerification::where('user_infos_id', $user_id)
            ->first();

        $user = UserInfo::find($user_id);

        $otp = $loginVerificaion->otp;
        $toEmail = $user->email;

        Mail::raw("Your OTP code is: $otp", function ($message) use ($toEmail) {
            $message->to($toEmail)
                ->subject('Your OTP Code');
        });


        return $loginVerificaion;
    }

    public function showOtpForm($user_id)
    {
        return view('auth.otp', ['user_id' => $user_id]);
    }

    public function dashboard()
    {
        $total_publication_featured =  Publish::where('is_featured', true)->count();
        $total_publication = Publish::where('is_deleted', false)->count();

        $total_newsletter_shown = Publish::where('is_shown', true)->where('tag', 'newsletters')->count();
        $total_newsletter = Publish::where('is_deleted', false)->where('tag', 'newsletters')->count();

        $total_conference_proceeding_shown = Publish::where('is_shown', true)->where('tag', 'conference-proceedings')->count();
        $total_conference_proceeding = Publish::where('is_deleted', false)->where('tag', 'conference-proceedings')->count();

        $total_multimedia_resources_shown = Publish::where('is_shown', true)->where('tag', 'multimedia-resources')->count();
        $total_multimedia_resources = Publish::where('is_deleted', false)->where('tag', 'multimedia-resources')->count();

        $total_leadership_featured =  Leadership::where('is_featured', true)->count();
        $total_leadership = Leadership::where('is_deleted', false)->count();

        $count_economic_advancements_shown = Leadership::where('is_shown', true)->where('tag', 'economic-advancements')->count();
        $count_economic_advancements = Leadership::where('is_deleted', false)->where('tag', 'economic-advancements')->count();

        $count_restoring_democracy_shown = Leadership::where('is_shown', true)->where('tag', 'restoring-democracy')->count();
        $count_restoring_democracy = Leadership::where('is_deleted', false)->where('tag', 'restoring-democracy')->count();

        $count_social_development_shown = Leadership::where('is_shown', true)->where('tag', 'social-development')->count();
        $count_social_development = Leadership::where('is_deleted', false)->where('tag', 'social-development')->count();

        $count_environmental_vision_shown = Leadership::where('is_shown', true)->where('tag', 'environmental-vision')->count();
        $count_environmental_vision = Leadership::where('is_deleted', false)->where('tag', 'environmental-vision')->count();

        $count_other_shown = Leadership::where('is_shown', true)->where('tag', 'other-sectors')->count();
        $count_other = Leadership::where('is_deleted', false)->where('tag', 'other-sectors')->count();


        $object_counter = [
            $total_publication_featured,
            $total_newsletter_shown,
            $total_conference_proceeding_shown,
            $total_multimedia_resources_shown,
            $total_leadership_featured,
            $count_economic_advancements_shown,
            $count_restoring_democracy_shown,
            $count_social_development_shown,
            $count_environmental_vision_shown,
            $count_other_shown,
        ];

        $object_total_counter = [
            $total_publication,
            $total_newsletter,
            $total_conference_proceeding,
            $total_multimedia_resources,
            $total_leadership,
            $count_economic_advancements,
            $count_restoring_democracy,
            $count_social_development,
            $count_environmental_vision,
            $count_other,
        ];

        return  view('dashboard.dashboard', compact('object_total_counter', 'object_counter'));
        // return response()->json($object_counter);
        //return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
