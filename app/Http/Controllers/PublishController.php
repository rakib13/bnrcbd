<?php

namespace App\Http\Controllers;

use App\Models\Publish;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'book_name'     => 'required|string|max:255',
            'book_title'    => 'required|string|max:255',
            'book_summary'  => 'required|email|unique:user_infos,email',
            'book_author'      => 'required|string|min:5',
            'thumbnail'          => 'required|string',
            'link'     => 'nullable|boolean',
            'publish_date'    => 'required|string|max:255',
            'topic'    => 'required|string|max:255',
            'category_of_publication' =>'required|string|max:255',
        ]);

        $publish =  new Publish;
        $publish->book_name = $request->book_name;
        $publish->book_title = $request->book_title;
        $publish->book_summary = $request->book_summary;
        $publish->book_author = $request->book_author;
        $publish->thumbnail = $request->thumbnail;
        $publish->link =  $request->link;
        $publish->publish_date = $request->publish_date;
        $publish->topic = $request->topic;
        $publish->type = $request->type;
        $publish->category_of_publication = $request->category_of_publication;
        $publish->save();

        return redirect('/add-book')->with('status','Book Added Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Publish $publish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publish $publish)
    {
        //
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
