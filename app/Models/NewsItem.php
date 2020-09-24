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
 */
class NewsItem extends Model
{
    use HasFactory;
}
