<?php


namespace App\Helper;

use App\Models\Post;
use FeedItem;
use Illuminate\Support\Collection;
use Spatie\Feed\Feedable;

/**
 * App\Helper\NewsItem
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int $featured
 * @property string $type
 * @property int $author_id
 * @property string $description
 * @property string $meta_description
 * @property string $featured_image
 * @property int $views
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $rating_desc
 * @property-read \App\Models\User $author
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \App\Models\Category $category
 * @property-read string $image_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereFeaturedImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereRatingDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Helper\NewsItem whereViews($value)
 * @mixin \Eloquent
 */
class NewsItem extends Post implements Feedable
{
    /**
     * @return array|
     */
    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->link($this->slug)
            ->author($this->author);
    }

    /**
     * @return Collection
     */
    public static function getFeedItems()
    {
        return NewsItem::orderBy('created_at', 'desc')->limit(50)->get();
    }
}
