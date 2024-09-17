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
 * @property-read \App\Models\User|null $user
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
 * @property string $declaration_text
 * @property string $signature
 * @property string $declaration_date
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereDeclarationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereDeclarationText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationDeclarationDetail withoutTrashed()
 */
	class ApplicationDeclarationDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $tpa_field_application_data_id
 * @property string $group
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $allocation_status
 * @property-read \App\Models\TpaFieldApplicationData $tpaFieldApplications
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereAllocationStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereTpaFieldApplicationDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignmentGroup withoutTrashed()
 */
	class AssignmentGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $assignment_group_id
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AssignmentGroup $assignmentGroup
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereAssignmentGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment withoutTrashed()
 */
	class Comment extends \Eloquent {}
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
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\District|null $district
 * @property-read \App\Models\Region|null $region
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Ward|null $ward
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
 * @property int|null $module_id
 * @property string $deadline_date
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Module|null $modules
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline query()
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline whereDeadlineDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Deadline withoutTrashed()
 */
	class Deadline extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FieldApplicationData> $fieldApplications
 * @property-read int|null $field_applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Module> $modules
 * @property-read int|null $modules_count
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
 * @property-read \App\Models\Region|null $region
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
 * @property string|null $check_number
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraUserInfo whereCheckNumber($value)
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
 * @property int|null $port_id
 * @property int|null $module_id
 * @property int|null $sub_module_id
 * @property string $application_letter
 * @property string $confirm_status
 * @property string $view_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $approval_status
 * @property int|null $department_id
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\Module|null $modules
 * @property-read \App\Models\SubModule|null $subModule
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData query()
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereApplicationLetter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereApprovalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereConfirmStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData wherePortId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereSubModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData whereViewStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FieldApplicationData withoutTrashed()
 */
	class FieldApplicationData extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $assignment_group_id
 * @property string $task
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AssignmentGroup $assignmentGroup
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereAssignmentGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereTask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupTask withoutTrashed()
 */
	class GroupTask extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $insurance_company
 * @property string $insurance_card_number
 * @property string $expiration_date
 * @property string $insurance_card_attachment
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereExpirationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereInsuranceCardAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereInsuranceCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereInsuranceCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InsuranceDetail withoutTrashed()
 */
	class InsuranceDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $language
 * @property string $language_level
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency query()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereLanguageLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageProficiency withoutTrashed()
 */
	class LanguageProficiency extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $department_id
 * @property string $module_name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Deadline|null $deadline
 * @property-read \App\Models\Department|null $department
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereModuleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Module withoutTrashed()
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $module_id
 * @property string $vacant_space
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Module|null $modules
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace whereVacantSpace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleVacantSpace withoutTrashed()
 */
	class ModuleVacantSpace extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $attachment_name
 * @property string $attachment_file
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereAttachmentFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereAttachmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherAttachmentDetail withoutTrashed()
 */
	class OtherAttachmentDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $date_of_birth
 * @property string|null $nida_number
 * @property string $disability_status
 * @property string|null $marital_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereDisabilityStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereNidaNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalDetail whereUserId($value)
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
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\District|null $district
 * @property-read \App\Models\Region|null $region
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TpaFieldApplicationData> $tpaFieldData
 * @property-read int|null $tpa_field_data_count
 * @property-read \App\Models\Ward|null $ward
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
 * @property int|null $user_id
 * @property int|null $country_id
 * @property string $course
 * @property string $mode_of_learning
 * @property string $institution
 * @property string|null $issuer
 * @property string $certificate
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereIssuer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereModeOfLearning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfessionalQualification withoutTrashed()
 */
	class ProfessionalQualification extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $project_name
 * @property string $start_date
 * @property string $end_date
 * @property string $project_url
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereProjectUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectDetail withoutTrashed()
 */
	class ProjectDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $publication_title
 * @property string $publication_standard
 * @property string $publication_date
 * @property string|null $publication_url
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublicationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublicationStandard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublicationTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublicationUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication withoutTrashed()
 */
	class Publication extends \Eloquent {}
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
 * @property int|null $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $gender
 * @property string $occupation
 * @property string $institute
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereInstitute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RefereeDetail withoutTrashed()
 */
	class RefereeDetail extends \Eloquent {}
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
 * @property-read \App\Models\Country|null $country
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
 * @property int $user_id
 * @property string $response_letter
 * @property string $recipient
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereResponseLetter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ResponseLetter withoutTrashed()
 */
	class ResponseLetter extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $department_id
 * @property string $deadline_date
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department $department
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline query()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereDeadlineDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldDeadline withoutTrashed()
 */
	class SetFieldDeadline extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $department_id
 * @property string $vacant_space
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace query()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace whereVacantSpace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SetFieldVacantSpace withoutTrashed()
 */
	class SetFieldVacantSpace extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $skill_category
 * @property string $skill_level
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience query()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereSkillCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereSkillLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillExperience withoutTrashed()
 */
	class SkillExperience extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $module_id
 * @property string $sub_module
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FieldApplicationData> $fieldApplications
 * @property-read int|null $field_applications_count
 * @property-read \App\Models\Module|null $modules
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule whereSubModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SubModule withoutTrashed()
 */
	class SubModule extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $port_id
 * @property int|null $department_id
 * @property string $application_letter
 * @property string $confirm_status
 * @property string $view_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $approval_status
 * @property string $allocation_status
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\Port|null $port
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData query()
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereAllocationStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereApplicationLetter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereApprovalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereConfirmStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData wherePortId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData whereViewStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TpaFieldApplicationData withoutTrashed()
 */
	class TpaFieldApplicationData extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $training_name
 * @property string $training_institution
 * @property string $training_certificate
 * @property string $start_date
 * @property string $end_date
 * @property string $training_description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereTrainingCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereTrainingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereTrainingInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereTrainingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingAndWorkshop withoutTrashed()
 */
	class TrainingAndWorkshop extends \Eloquent {}
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
 * @property-read \App\Models\AcademicDetail|null $academicDetails
 * @property-read \App\Models\ApplicationDeclarationDetail|null $applicationDeclaration
 * @property-read \App\Models\ContactDetail|null $contactDetails
 * @property-read \App\Models\ExtraUserInfo|null $extraUserInfo
 * @property-read \App\Models\LanguageProficiency|null $languageProficiency
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\PersonalDetail|null $personalDetails
 * @property-read \App\Models\TpaFieldApplicationData|null $tpaFieldApplications
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
 * @property-read \App\Models\District|null $district
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

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $institution
 * @property string $institution_address
 * @property string $job_title
 * @property string $current_occupation
 * @property string $start_date
 * @property string $duties_performed
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereCurrentOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereDutiesPerformed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereInstitutionAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkExperience withoutTrashed()
 */
	class WorkExperience extends \Eloquent {}
}

