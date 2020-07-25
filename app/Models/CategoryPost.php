<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryPost
 *
 * @method static Builder|CategoryPost newModelQuery()
 * @method static Builder|CategoryPost newQuery()
 * @method static Builder|CategoryPost query()
 * @mixin Eloquent
 */
class CategoryPost extends Model
{
    protected $table = 'category_post';
    protected $fillable = ['post_id', 'category_id'];
}
