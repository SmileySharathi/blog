<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Post;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Post::all();
        return view('books.index',compact('books'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        // dd($books);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();
        // dd($post);
        $ins = new Post();
        $ins->title = $request->title;
        $ins->body = $request->body;
        $ins->slug = $request->slug;
        // dd($ins);

        $ins->save();

        return response()->json(["result" => "ok"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('books.show', [
            'book' => Post::where('slug', '=', $slug)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        return view('books.edit', [
            'book' => Post::where('_id', '=', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->edid);
        $post = Post::find($request->edid);
       $post->title = $request->title;
       $post->body = $request->body;
       $post->slug = $request->slug;
       $post->save();

       return response()->json(["result" => "ok"], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($postId)
    {
        $post = Post::find($postId);
     $post->delete();

     return response()->json(["result" => "ok"], 200);
    }
}
