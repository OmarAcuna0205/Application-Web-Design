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
 * App\Models\Character
 *
 * @property int $id_character
 * @property string|null $name
 * @property string|null $real_name
 * @property string|null $gender
 * @property int|null $id_universe
 * @property-read \App\Models\Universe|null $universe
 * @method static \Illuminate\Database\Eloquent\Builder|Character newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Character newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Character query()
 * @method static \Illuminate\Database\Eloquent\Builder|Character whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Character whereIdCharacter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Character whereIdUniverse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Character whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Character whereRealName($value)
 */
	class Character extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Universe
 *
 * @property int $id_universe
 * @property string|null $universe
 * @property string|null $company
 * @property string|null $age
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Character> $characters
 * @property-read int|null $characters_count
 * @method static \Illuminate\Database\Eloquent\Builder|Universe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Universe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Universe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Universe whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Universe whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Universe whereIdUniverse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Universe whereUniverse($value)
 */
	class Universe extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

