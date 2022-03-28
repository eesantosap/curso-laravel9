<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Comment,
    User
};

class CommentController extends Controller
{
    protected $model;

    public function __construct(Comment $comment, User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    public function index($userId)
    {
        $user = $this->user->find(); 
        return view('users.comments.index');
    }


}
