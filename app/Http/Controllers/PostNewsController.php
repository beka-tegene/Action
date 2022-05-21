<?php

namespace App\Http\Controllers;

use App\Models\PostNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\str;

class PostNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $postId = PostNews::latest()->take(1)->first()->id + 1;
        $slug = str::slug($title,'-').'-'.$postId;
        $description = $request->input('description');
        $deadline = $request->input('deadline');
        $user=Auth::user()->id;
        $category_id = $request->input('category');

        $file=$request->biddoc;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->biddoc->move('bid_document',$filename);



        $postNews =new PostNews();
        $postNews->title = $title;
        $postNews->slug = $slug;
        $postNews->description = $description;
        $postNews->deadline = $deadline;
        $postNews->biddocument = $filename;
        $postNews->user_id = $user;
        $postNews->category_id = $category_id;

        $postNews->save();

        return redirect(route('procurmentteam.show'));
    }
    public function download(Request $request,$file)
   {
        return response()->download(public_path('bid_document/'.$file));
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostNews  $postNews
     * @return \Illuminate\Http\Response
     */
    public function show(PostNews $postNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostNews  $postNews
     * @return \Illuminate\Http\Response
     */
    public function edit(PostNews $postNews)
    {
        if(auth()->user()->id !== $postNews->user->id)
        {
            abort(403);
        }
        return view('procurement_team.edit-tender', compact('postNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostNews  $postNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostNews $postNews)
    {
        if(auth()->user()->id !== $postNews->user->id)
        {
            abort(403);
        }
        $title = $request->input('title');
        $postId = $postNews->id;
        $slug = str::slug($title,'-').'-'.$postId;
        $description = $request->input('description');
        $deadline = $request->input('deadline');
        $file=$request->biddoc;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->biddoc->move('bid_document',$filename);


        $postNews->title = $title;
        $postNews->slug = $slug;
        $postNews->description = $description;
        $postNews->deadline = $deadline;
        $postNews->biddocument = $filename;

        $postNews->save();

        return redirect(route('procurmentteam.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostNews  $postNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostNews $postNews)
    {
        $postNews->delete();
        return redirect()->back();
    }
}
