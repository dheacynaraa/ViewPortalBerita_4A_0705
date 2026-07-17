<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->where('published', 'yes')
            ->orderBy('date', 'desc')
            ->get();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'publisher' => 'required',
            'date' => 'required|date',
            'published' => 'required'
        ]);

        $image = $request->file('image')->getClientOriginalName();

        $request->file('image')->move(public_path('img'), $image);

        DB::table('posts')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'publisher' => $request->publisher,
            'date' => $request->date,
            'published' => $request->published,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = DB::table('posts')->find($id);

        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = DB::table('posts')->find($id);

        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'publisher' => $request->publisher,
            'date' => $request->date,
            'published' => $request->published,
            'updated_at' => now()
        ];

        if($request->hasFile('image')){

            $image = $request->file('image')->getClientOriginalName();

            $request->file('image')->move(public_path('img'), $image);

            $data['image'] = $image;
        }

        DB::table('posts')
            ->where('id',$id)
            ->update($data);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('posts')
            ->where('id',$id)
            ->delete();

        return redirect('/posts');
    }
}