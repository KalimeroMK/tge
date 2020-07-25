<?php

namespace App\Models;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LoginSecurity
 *
 * @property int $id
 * @property int $user_id
 * @property int $google2fa_enable
 * @property string|null $google2fa_secret
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity whereGoogle2faEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity whereGoogle2faSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LoginSecurity whereUserId($value)
 * @mixin \Eloquent
 */
class LoginSecurity extends Model
{
    use ClearsResponseCache;

    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
