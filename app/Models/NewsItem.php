<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NewsItem
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $category_id
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereCategoryId($value)
 */
class NewsItem extends Model
{
    public $fillable = ['title','image', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
