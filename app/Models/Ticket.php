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
class Application extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    public const STATUS_NEW = 'new';
    public const STATUS_UNDER_CONSIDERATION = 'under_consideration';
    public const STATUS_IN_WORK = 'in_work';
    public const STATUS_COMPLETED = 'completed';
    const TYPE_DEPARTURE = 'departure';
    const TYPE_OFFICE = 'office';

    protected $fillable = [
        'start_at',
        'status',
        'name',
        'phone',
        'topic_id',
        'client_id',
        'manager_id',
        'lawyer_id',
        'government_agency',
        'application_type',
        'meeting_date',
        'work_start_date_and_time',
        'count_hours_work',
        'price',
        'manager_notes',
        'description',
    ];


    public static function getStatuses()
    {
        return [
            Application::STATUS_NEW => 'Новая',
            Application::STATUS_UNDER_CONSIDERATION => 'На рассмотрении',
            Application::STATUS_IN_WORK => 'В работе',
            Application::STATUS_COMPLETED => 'Завершен',
        ];
    }

    public static function getTypes()
    {
        return [
            Application::TYPE_DEPARTURE => 'выезд',
            Application::TYPE_OFFICE => 'В офисе',
        ];
    }

    public static function getTopic()
    {
        return [
            'finance_and_bankruptcy' => 'Финансы и банкротство',
            'property' => 'Имущество',
            'Business_services' => 'Услуги для бизнеса',
        ];
    }

    public function getStatusNameAttribute()
    {
        return Application::getStatuses()[$this->status];
    }

    public function getTypeNameAttribute()
    {
        return Application::getTypes()[$this->status];
    }

    public function getFormatStartAtAttribute()
    {
        if (empty($this->start_at)) {
            return ' ';
        }
        return Carbon::parse($this->start_at)->translatedFormat('d F y, H:i');
    }
    public function getEndWorkDateAttribute()
    {
        return Carbon::parse($this->work_start_date_and_time)->addHours($this->count_hours_work);
    }
    public function getDateMonthAttribute()
    {
        return Carbon::parse($this->work_start_date_and_time)->day;
    }
    public function getStartWorkDateStrAttribute()
    {
        return (Carbon::parse($this->work_start_date_and_time))->format('H:i');
    }
    public function getEndWorkDateStrAttribute()
    {
        return (Carbon::parse($this->work_start_date_and_time)->addHours($this->count_hours_work))->format('H:i');
    }


    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class);
    }

    public function lawyer()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }




}
