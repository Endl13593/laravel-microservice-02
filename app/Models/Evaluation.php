<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 * @package App\Models
 * @property int id
 * @property string company
 * @property string comment
 * @property int stars
 */
class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'comment',
        'stars'
    ];
}
