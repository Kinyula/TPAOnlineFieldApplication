<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'password',
        'gender',
        'profile_image',
        'position',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function extraUserInfo()
    {
        return $this->hasOne(ExtraUserInfo::class);
    }

    public function personalDetails()
    {
        return $this->hasOne(PersonalDetail::class);
    }

    public function contactDetails()
    {
        return $this->hasOne(ContactDetail::class);
    }

    public function academicDetails()
    {
        return $this->hasOne(AcademicDetail::class);
    }

    public function languageProficiency()
    {
        return $this->hasOne(LanguageProficiency::class);
    }

    public function applicationDeclaration()
    {
        return $this->hasOne(ApplicationDeclarationDetail::class);
    }

    public function tpaFieldApplications()
    {
        return $this->hasOne(TpaFieldApplicationData::class);
    }
}
