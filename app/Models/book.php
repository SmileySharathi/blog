<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class book extends Model
{

	protected $connection = 'mongodb';
	protected $collection = 'posts';

    use HasFactory;

    protected $fillable = [
        'name', 'details'
    ];
}
