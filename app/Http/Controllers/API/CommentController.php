<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'author' => ['nullable', 'string', 'min:3', 'max:100'],
            'content' => ['required', 'string', 'min:2', 'max:500'],
            'project_id' => ['required', 'exists:projects,id']
        ]);

        $new_comment = new Comment();
        $new_comment->fill($request->all());
        $new_comment->save();

        return $new_comment;
    }
}
