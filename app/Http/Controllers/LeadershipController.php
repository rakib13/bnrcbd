<?php

namespace App\Http\Controllers;

use App\Models\Leadership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(?string $itemName = null)
    {
        //
        if ($itemName == null)
            $leadership = Leadership::orderBy('tag', 'asc')
                ->orderBy('is_shown', 'asc')->get();
        else
            $leadership = Leadership::where('tag', $itemName)
                ->orderBy('tag', 'asc')
                ->orderBy('is_shown', 'asc')->get();

        return view('dashboard.leadership.all', compact('leadership'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.leadership.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'book_name'         => 'required|string|max:255',
            'book_title'        => 'required|string|max:255',
            'book_summary'      => 'required|string',
            'book_author'       => 'required|string|min:5',
            'thumbnail'         => 'required | mimes:jpeg,jpg,png,PNG | max:2000',
            'link'              => 'nullable|string',
            'publish_date'      => 'required|date',
            'tag'               => 'required|string|max:255',
        ]);

        $leadership =  new Leadership();
        $leadership->book_name = $request->book_name;
        $leadership->book_title = $request->book_title;
        $leadership->book_summary = $request->book_summary;
        $leadership->book_author = $request->book_author;
        $image = $request->file('thumbnail');
        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'img/pdf-cover/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $leadership->thumbnail = $image_url;
        }
        $leadership->link =  $request->link;
        $leadership->publish_date = $request->publish_date;
        $leadership->tag = $request->tag;
        $leadership->user_infos_id = Auth::user()->id;
        $leadership->save();

        return redirect('/all-leadership')->with('status', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $leadership = Leadership::findOrFail($id);
        return view('dashboard.leadership.show', compact('leadership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $leadership = Leadership::findOrFail($id);
        return view('dashboard.leadership.edit', compact('leadership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $leadership = Leadership::findOrFail($id);

        // Update basic fields
        $leadership->book_name = $request->book_name;
        $leadership->book_title = $request->book_title;
        $leadership->book_author = $request->book_author;
        $leadership->publish_date = $request->publish_date;
        $leadership->book_summary = $request->book_summary;
        $leadership->link = $request->link;
        //$leadership->category_of_publication = $request->category_of_publication;
        $leadership->tag = $request->tag;

        // Handle Thumbnail upload
        if ($request->hasFile('thumbnail')) {
            // Delete old image if exists
            if (file_exists(public_path($leadership->thumbnail))) {
                unlink(public_path($leadership->thumbnail));
            }

            $image = $request->file('thumbnail');
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'img/pdf-cover/';
            $image_url = $upload_path . $image_full_name;

            // Move file to public/img/pdf-cover/
            $image->move(public_path($upload_path), $image_full_name);

            $leadership->thumbnail = $image_url;
        }

        $leadership->save();

        return redirect()->back()->with('success', 'Updated successfully!');
    }
    

    /*
    Status IS SHOWN
    */
    public function updateIsShown(Request $request, $id)
    {
        $leadership = Leadership::findOrFail($id);

        $leadership->is_shown = $request->is_shown;
        $leadership->save();

        // return redirect('/all-leadership')->with('success', 'Book details updated successfully!');
        return redirect()->back()->with('success', 'Book details updated successfully!');
    }

    /*
    Status IS FEATURED
    */
    public function updateIsFeatured(Request $request, $id)
    {
        $leadership = Leadership::findOrFail($id);

        $leadership->is_featured = $request->is_featured;
        $leadership->save();

        // return redirect('/all-leadership')->with('success', 'Book details updated successfully!');
        return redirect()->back()->with('success', 'Book details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leadership $leadership)
    {
        //
    }
}
