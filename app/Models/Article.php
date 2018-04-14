<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getParentIdAttribute(){
        $parent = User::where('leftChild',$this->id)->orWhere('rightChild',$this->id)->get();
    }
}
