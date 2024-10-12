<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
 * @property string $full_name
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $patronymic
 * @property string|null $date_born
 * @property string|null $document
 * @property string|null $document_number
 * @property string|null $issued_by
 * @property string|null $residential_address
 * @property string|null $registration_address
 * @property string|null $additional_information
 * @property string|null $email
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Application> $applications
 * @property-read int|null $applications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAdditionalInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDateBorn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDocumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereIssuedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePatronymic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereRegistrationAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereResidentialAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'name',
        'surname',
        'date_born',
        'document',
        'document_number',
        'issued_by',
        'residential_address',
        'registration_address',
        'additional_information',
        'email',
        'phone',
        'created_at',
        'updated_at',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
