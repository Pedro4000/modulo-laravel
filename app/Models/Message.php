<?php

namespace App\Models;

use App\Models\{Topic, User};
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $table = 'messages';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'topic_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }


}
