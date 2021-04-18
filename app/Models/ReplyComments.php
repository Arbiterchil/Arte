<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyComments extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'user_comId',
        'post_com_id',
        'comment',

    ];
}
