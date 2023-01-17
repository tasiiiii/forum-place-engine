<?php

namespace App\Models;

use DateTime;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int           $id
 * @property string        $name
 * @property string|null   $biography
 * @property string        $avatar
 * @property string        $background_image
 * @property string        $email
 * @property DateTime|null $email_verified_at
 * @property string        $password
 * @property int           $status
 */
class User extends Authenticatable
{}
