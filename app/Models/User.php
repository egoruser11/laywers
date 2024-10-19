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
 * @property string|null $name
 * @property string|null $role
 * @property string $account
 * @property string $login
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $start_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $format_start_at
 * @property-read mixed $is_active
 * @property-read mixed $is_admin
 * @property-read mixed $is_lawyer
 * @property-read mixed $is_manager
 * @property-read mixed $role_name
 * @property-read mixed $status_name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Application> $lawyerApplications
 * @property-read int|null $lawyer_applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Application> $lawyerFutureApplications
 * @property-read int|null $lawyer_future_applications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User lawyer()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    public const STATUS_ACTIVE = 'active';
    public const STATUS_BLOCKED = 'blocked';

    public const MANAGER_ROLE = 'manager';
    public const ADMIN_ROLE = 'admin';
    public const LAWYER_ROLE = 'lawyer';

    protected $fillable = [
        'account',
        'login',
        'password',
        'name',
        'role',
        'start_at',
    ];


    public static function getStatusesOfAccount()
    {
        return [
            User::STATUS_ACTIVE => 'Активен',
            User::STATUS_BLOCKED => 'Заблокирован',
        ];
    }

    public static function getRoles()
    {
        return [
            User::MANAGER_ROLE => 'Менеджер',
            User::ADMIN_ROLE => 'Админ',
            User::LAWYER_ROLE => 'Юрист',
        ];
    }

    public function getStatusNameAttribute()
    {
        return User::getStatusesOfAccount()[$this->account];
    }

    public function getIsActiveAttribute()
    {
        return $this->account == User::STATUS_ACTIVE;
    }

    public function getIsAdminAttribute()
    {
        return $this->role == User::ADMIN_ROLE;
    }

    public function getIsManagerAttribute()
    {
        return $this->role == User::MANAGER_ROLE;
    }

    public function getIsLawyerAttribute()
    {
        return $this->role == User::LAWYER_ROLE;
    }

    public function getRoleNameAttribute()
    {
        return User::getRoles()[$this->role];
    }

    public function getFormatStartAtAttribute()
    {
        if (empty($this->start_at)) {
            return ' ';
        }
        return Carbon::parse($this->start_at)->translatedFormat('d F y, H:i');
    }

    public function scopeLawyer($query)
    {
        return $query->where('role',User::LAWYER_ROLE);
    }

    public function lawyerApplications()
    {
        return $this->hasMany(Application::class, 'lawyer_id');
    }

    public function lawyerFutureApplications()
    {
        return $this->hasMany(Application::class, 'lawyer_id')->where('work_start_date_and_time','>=',now()->subYear());//->where('name', 'Галкина');
    }


}
