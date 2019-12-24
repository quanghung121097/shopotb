<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Validator;
use Mystock\Stock\Models\Comment as CommentModel;


class Comment extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Comment',
            'description' => 'Hiển thị comment',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSave()
    {
        $comment = new CommentModel();
        $comment->content = Input::get('content');
        $comment->save();
        return Redirect::back();
    }
}
