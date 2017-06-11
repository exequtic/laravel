<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->paginate(1);
        return view('project.comments', compact('comments'), ['title' => 'Гостевая книга']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create', ['title' => 'Комментирование']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $this->validate($request, ['name' => 'required|unique:comments|max:20|min:2', 'email' => 'required|unique:comments', 'msg' => 'required|min:5']);
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->msg = $request->msg;
        $comment->save();

        return redirect('comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return abort(404);
        }

        return view('project.edit', ['title' => 'Комментирование'])->with('comment', Comment::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $comment = Comment::find($id);

        $comment->fill($request->all());
        $comment->save();

        return redirect('comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);

        return  redirect('comments');
    }
}
