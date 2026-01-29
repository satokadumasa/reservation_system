<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pref extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get the user associated with the Pref
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pref(): HasOne
    {
        return $this->hasMany(UserInfo::class, 'id', 'pref_id');
    }
}
