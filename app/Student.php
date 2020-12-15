<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table    = 'students';
    protected $fillable = [ 'name', 'course_name' ,  'completed','status', 'certificate_id', 'certificate_link' ];

}
