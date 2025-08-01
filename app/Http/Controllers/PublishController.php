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
            $publish = Publish::orderBy('category_of_publication', 'asc')
                ->orderBy('is_visible', 'asc')->get();
        else
            $publish = Publish::where('category_of_publication', $itemName)
                ->orderBy('category_of_publication', 'asc')
                ->orderBy('is_visible', 'asc')->get();

        return view('dashboard.allBook', compact('publish'));
        // return response()->json($publish);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.addBook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Optional: Validation
        $request->validate([
            'book_name'                 => 'required|string|max:255',
            'book_title'                => 'required|string|max:255',
            'book_summary'              => 'required|string|',
            'book_author'               => 'required|string|min:5',
            'thumbnail'                 => 'required | mimes:jpeg,jpg,png,PNG | max:2000',
            'link'                      => 'nullable|string',
            'publish_date'              => 'required|date|max:255',
            'topic'                     => 'required|string|max:255',
            'type'                     => 'required|string|max:255',
            'category_of_publication'   => 'required|string|max:255',
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
        $publish->category_of_publication = $request->category_of_publication;
        $publish->user_infos_id = Auth::user()->id;
        $publish->save();

        return redirect('/add-book')->with('status', 'Book Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $publish = Publish::findOrFail($id);
        return view('dashboard.showBook', compact('publish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $publish = Publish::findOrFail($id);
        return view('dashboard.editBook', compact('publish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publish $publish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publish $publish)
    {
        //
    }
}
