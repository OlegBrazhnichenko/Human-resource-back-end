<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    protected $table = 'work_history';

    protected $fillable = [
        'employee_id',
        'company_id',
        'start_date',
        'end_date',
        'role',
    ];

    public function employee() {
        return $this->belongsTo('App\Employee', 'employee_id');
    }

    public function company() {
        return $this->belongsTo('App\Company', 'company_id');
    }
}
