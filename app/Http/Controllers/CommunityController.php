<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use PhpParser\Comment;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comments = Community::all();
        $comments = Community::paginate(5);

        return view('community.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required|max:50',
            'comment' => 'required|max:255',
        ]);

        $comments = Community::create([
            'name' => $request->name,
            'title' => $request->title,
            'comment' => $request->comment,
        ]);

        return redirect(route('community.index'))->with('success', 'Success! Your comment has been published.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Community::findOrFail($id);

        return view('community.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Community::findOrFail($id);

        return view('community.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required|max:50',
            'comment' => 'required|max:255',
        ]);

        $comment = Community::findOrFail($id);

        $comment->update($request->all());

        return redirect(route('community.index'))->with('success_update', 'Success! Your comment was updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Community::findOrFail($id);

        $comment->delete();

        return redirect(route('community.index'))->with('success_delete', 'Your comment was deleted.');
    }
}
