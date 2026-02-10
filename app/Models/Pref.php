<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pref extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the user associated with the Pref
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_info(): HasOne
    {
        return $this->hasOne(UserInfo::class, 'id', 'pref_id');
    }
}
