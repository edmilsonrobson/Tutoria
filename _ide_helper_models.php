<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\FundingInstitution
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $name
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\FundingInstitution onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FundingInstitution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FundingInstitution whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FundingInstitution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FundingInstitution whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FundingInstitution whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FundingInstitution withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\FundingInstitution withoutTrashed()
 */
	class FundingInstitution extends \Eloquent {}
}

namespace App{
/**
 * App\Project
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property int|null $funding_institution_id
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Project onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereFundingInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Project withoutTrashed()
 */
	class Project extends \Eloquent {}
}

namespace App{
/**
 * App\Rating
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $tutor_id
 * @property int $student_id
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Rating onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereTutorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Rating withoutTrashed()
 */
	class Rating extends \Eloquent {}
}

namespace App{
/**
 * App\RatingCriteria
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $icon_name
 * @property string $name
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\RatingCriteria onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingCriteria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingCriteria whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingCriteria whereIconName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingCriteria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingCriteria whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingCriteria whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RatingCriteria withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\RatingCriteria withoutTrashed()
 */
	class RatingCriteria extends \Eloquent {}
}

namespace App{
/**
 * App\RatingItem
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $rating_id
 * @property int $rating_item_id
 * @property int $score
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\RatingItem onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereRatingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereRatingItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RatingItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RatingItem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\RatingItem withoutTrashed()
 */
	class RatingItem extends \Eloquent {}
}

namespace App{
/**
 * App\Scholarship
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $project_id
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Scholarship onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Scholarship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Scholarship whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Scholarship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Scholarship whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Scholarship whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Scholarship withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Scholarship withoutTrashed()
 */
	class Scholarship extends \Eloquent {}
}

namespace App{
/**
 * App\ScholarshipLog
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $scholarship_id
 * @property int $student_id
 * @property \Carbon\Carbon $started_at
 * @property \Carbon\Carbon $ended_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\ScholarshipLog onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereScholarshipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScholarshipLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ScholarshipLog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ScholarshipLog withoutTrashed()
 */
	class ScholarshipLog extends \Eloquent {}
}

namespace App{
/**
 * App\Skill
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $name
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Skill onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Skill withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Skill withoutTrashed()
 */
	class Skill extends \Eloquent {}
}

namespace App{
/**
 * App\Student
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $scholarship_id
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Student onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereScholarshipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Student withoutTrashed()
 */
	class Student extends \Eloquent {}
}

namespace App{
/**
 * App\Tutor
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $is_admin
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Tutor onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutor whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tutor withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Tutor withoutTrashed()
 */
	class Tutor extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Skill[] $skills
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 */
	class User extends \Eloquent {}
}

