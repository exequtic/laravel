<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\comment
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $msg
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereMsg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereUpdatedAt($value)
 */
class Comment extends Model
{
    protected $fillable = ['name', 'email', 'msg'];
}