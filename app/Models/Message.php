<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @property int $id
 * @property string $name
 * @property string|null $start_at
 * @property string $status
 * @property string|null $phone
 * @property int|null $topic_id
 * @property int|null $client_id
 * @property int|null $manager_id
 * @property int|null $lawyer_id
 * @property string|null $government_agency
 * @property string|null $application_type
 * @property string|null $meeting_date
 * @property string|null $work_start_date_and_time
 * @property int|null $count_hours_work
 * @property int|null $price
 * @property string|null $manager_notes
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client|null $client
 * @property-read mixed $end_work_date
 * @property-read mixed $format_start_at
 * @property-read mixed $status_name
 * @property-read mixed $type_name
 * @property-read \App\Models\User|null $lawyer
 * @property-read \App\Models\User|null $manager
 * @property-read \App\Models\Topic|null $topic
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereApplicationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCountHoursWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereGovernmentAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereLawyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereManagerNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereMeetingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereTopicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereWorkStartDateAndTime($value)
 * @mixin \Eloquent
 */
class Message extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = false;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }


}
