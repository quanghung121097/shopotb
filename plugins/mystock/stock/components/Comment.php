<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Mystock\Stock\Models\Comment as CommentModel;
use RainLab\User\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Comment extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Comment',
            'description' => 'Component Comment',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSave()
    {
        $slug = $this->param('slug');
        $comment = new CommentModel();
        $comment->content = Input::get('content');
        $comment->slug_product = $slug;
        $comment->id_user = Auth::user()->id;
        $comment->user_name = Auth::user()->name;
        $comment->save();
        return Redirect::back();
    }

    public $comments;
    public function onRun()
    {
        $slug = $this->param('slug');
        $this->comments = DB::table('mystock_stock_comment')
            ->select('*')
            ->join('users','users.id', '=', 'mystock_stock_comment.id_user')
            ->where('mystock_stock_comment.slug_product',$slug)
            ->orderBy('mystock_stock_comment.created_at','DESC')
            ->get();
    }
}
