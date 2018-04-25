<?php
/**
 * Created by PhpStorm.
 * User: agant
 * Date: 2018/4/12
 * Time: 22:27
 */

namespace App\Observers;

use App\Models\Article;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ArticleObserver
{
    public function creating(Article $topic)
    {
        //
    }

    public function updating(Article $topic)
    {
        //
    }

    public function saving(Article $topic){
        $topic->body = clean($topic->body, 'article_body');
    }

    public function saved(Article $topic){

    }
}