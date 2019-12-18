<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alumnus extends Model
{
    protected $fillable = [
        'full_name','gender','email','user_name','password','department','year_of_gratuation','resedent_address','work_place','job_category','name_of_organization','position','phone_number','profesional_membership','status',
    ];

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}



