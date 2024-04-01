<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Listing
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $logo
 * @property string $tags
 * @property string $company
 * @property string $location
 * @property string $email
 * @property string $website
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ListingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Listing filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereWebsite($value)
 * @mixin \Eloquent
 */
/**
 * app\models\Listing
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $logo
 * @property string $tags
 * @property string $company
 * @property string $location
 * @property string $email
 * @property string $website
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ListingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Listing filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Listing whereWebsite($value)
 * @mixin \Eloquent
 */
class Listing extends Model
{
    use HasFactory;
/* protected $fillable = ['title','company','location','website','email','description','tags']; */
    public function scopeFilter($query, array $filters){

        if($filters['tag'] ?? false)
            {
                $query->where('tags', 'like','%'. request('tag') .'%');
            }
        if($filters['search'] ?? false)
            {
                $query->where('title', 'like','%'. request('search') .'%')->orWhere('description', 'like','%'. request('search') .'%')
                ->orWhere('tags', 'like','%'. request('search') .'%');
            }
}
 // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
