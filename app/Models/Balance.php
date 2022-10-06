<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\History;
use App\Models\User;

class Balance extends Model
{

    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the Balance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recordHistory()
    {
        $this->history()->create([
            'user_id' => $this->user_id
        ]);
    }

    public function history()
    {
        return $this->morphMany(History::class, 'subject')->latest();
    }

}
