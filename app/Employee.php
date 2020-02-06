<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'emp_no';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The name of the table
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birth_date', 'first_name', 'last_name', 'gender', 'hire_date', 'emp_no'
    ];

    public function departments() {
        return $this->belongsToMany('App\Department', 'dept_emp', 'emp_no', 'dept_no');
    }

    public function department() {
        return $this->belongsToMany('App\Department', 'dept_emp', 'emp_no', 'dept_no')->wherePivot('to_date', '>=', now());
    }

    public function managedDepartments() {
        return $this->belongsToMany('App\Department', 'dept_emp', 'emp_no', 'dept_no')->withPivot('from_date', 'to_date');
    }

    public function titles() {
        return $this->hasMany('App\Title', 'emp_no');
    }

    public function title() {
        return $this->hasOne('App\Title', 'emp_no')->where('titles.to_date', '>=', now());
    }

    public function salaries() {
        return $this->hasMany('App\Salarie', 'emp_no');
    }

    public function salary() {
        return $this->hasOne('App\Salarie', 'emp_no')->where('salaries.to_date', '>=', now());
    }
}
