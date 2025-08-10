<?php

namespace App\Http\Controllers;

use App\Models\Publish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(?string $itemName = null)
    {
        //
        if ($itemName == null)
            $publish = Publish::orderBy('tag', 'asc')
                ->orderBy('is_shown', 'asc')->get();
        else
            $publish = Publish::where('tag', $itemName)
                ->orderBy('tag', 'asc')
                ->orderBy('is_shown', 'asc')->get();

        return view('dashboard.publications.allPublish', compact('publish'));
        // return response()->json($publish);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.publications.addPublish');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Optional: Validation
        $request->validate([
            'book_name'         => 'required|string|max:255',
            'book_title'        => 'required|string|max:255',
            'book_summary'      => 'required|string|',
            'book_author'       => 'required|string|min:5',
            'thumbnail'         => 'required | mimes:jpeg,jpg,png,PNG | max:2000',
            'link'              => 'nullable|string',
            'publish_date'      => 'required|date',
            'topic'             => 'required|string|max:255',
            'type'              => 'required|string|max:255',
            'tag'               => 'required|string|max:255',
        ]);

        $publish =  new Publish;
        $publish->book_name = $request->book_name;
        $publish->book_title = $request->book_title;
        $publish->book_summary = $request->book_summary;
        $publish->book_author = $request->book_author;
        $image = $request->file('thumbnail');
        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'img/pdf-cover/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $publish->thumbnail = $image_url;
        }
        $publish->link =  $request->link;
        $publish->publish_date = $request->publish_date;
        $publish->topic = $request->topic;
        $publish->type = $request->type;
        $publish->tag = $request->tag;
        $publish->user_infos_id = Auth::user()->id;
        $publish->save();

        return redirect('/all-publish')->with('status', 'Book Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $publish = Publish::findOrFail($id);
        return view('dashboard.publications.showPublish', compact('publish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $publish = Publish::findOrFail($id);
        return view('dashboard.publications.editPublish', compact('publish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $publish = Publish::findOrFail($id);

        // Update basic fields
        $publish->book_name = $request->book_name;
        $publish->book_title = $request->book_title;
        $publish->book_author = $request->book_author;
        $publish->publish_date = $request->publish_date;
        $publish->book_summary = $request->book_summary;
        $publish->link = $request->link;
        $publish->topic = $request->topic;
        $publish->type = $request->type;
        $publish->tag = $request->tag;

        // Handle Thumbnail upload
        if ($request->hasFile('thumbnail')) {
            // Delete old image if exists
            if (file_exists(public_path($publish->thumbnail))) {
                unlink(public_path($publish->thumbnail));
            }

            $image = $request->file('thumbnail');
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'img/pdf-cover/';
            $image_url = $upload_path . $image_full_name;

            // Move file to public/img/pdf-cover/
            $image->move(public_path($upload_path), $image_full_name);

            $publish->thumbnail = $image_url;
        }

        $publish->save();

        return redirect()->back()->with('success', 'Book details updated successfully!');
    }

    /*
    Status IS SHOWN
    */
    public function updateIsShown(Request $request, $id)
    {
        $publish = Publish::findOrFail($id);

        $publish->is_shown = $request->is_shown;
        $publish->save();

        // return redirect('/all-publish')->with('success', 'Book details updated successfully!');
        return redirect()->back()->with('success', 'Book details updated successfully!');
    }

    /*
    Status IS FEATURED
    */
    public function updateIsFeatured(Request $request, $id)
    {
        $publish = Publish::findOrFail($id);

        $publish->is_featured = $request->is_featured;
        $publish->save();

        // return redirect('/all-publish')->with('success', 'Book details updated successfully!');
        return redirect()->back()->with('success', 'Book details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publish $publish)
    {
        //
    }
}
