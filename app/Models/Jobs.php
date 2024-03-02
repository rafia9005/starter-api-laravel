<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jobs';
    protected $fillable = [
        'title',
        'commpany',
        'description',
        'type'
    ];
}
