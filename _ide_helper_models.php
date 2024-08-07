<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $institute_name
 * @property string $education_level
 * @property string $status
 * @property string $program
 * @property string $registration_number
 * @property int $current_year
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereCurrentYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereEducationLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereInstituteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademicDetail withoutTrashed()
 */
	class AcademicDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $country_id
 * @property int|null $region_id
 * @property int|null $district_id
 * @property int|null $ward_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail whereWardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactDetail withoutTrashed()
 */
	class ContactDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $country_name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country withoutTrashed()
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $department
 * @property string $floor_number
 * @property string $office_name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereFloorNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereOfficeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Department withoutTrashed()
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $region_id
 * @property string $district
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|District withoutTrashed()
 */
	class District extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $department_id
 * @property int|null $port_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo wherePortId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo whereUserId($value)
 */
	class ExtraUserInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $date_of_birth
 * @property string $phone_number
 * @property string $gender
 * @property string|null $nida_number
 * @property string $disability_status
 * @property string|null $marital_status
 * @property string|null $professionalism_title
 * @property string|null $designation
 * @property string|null $years_of_experience
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDisabilityStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereNidaNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereProfessionalismTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereYearsOfExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail withoutTrashed()
 */
	class PersonalDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $port_name
 * @property int|null $country_id
 * @property int|null $region_id
 * @property int|null $district_id
 * @property int|null $ward_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Port newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Port newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Port onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Port query()
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port wherePortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port whereWardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Port withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Port withoutTrashed()
 */
	class Port extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $question
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Question withoutTrashed()
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $country_id
 * @property string $region
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Region withoutTrashed()
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $gender
 * @property string $profile_image
 * @property string $role_id
 * @property string $position
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ExtraUserInfo|null $extraUserInfo
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfileImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $district_id
 * @property string $ward
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Ward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereWard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward withoutTrashed()
 */
	class Ward extends \Eloquent {}
}

