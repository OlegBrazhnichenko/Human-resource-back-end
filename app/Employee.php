<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $fillable = [
        'name',
        'surname',
        'bdate',
        'email',
        'phone',
        'address',
    ];

    public function workHistory() {
        return $this->hasMany('App\WorkHistory', 'employee_id');
    }
}
