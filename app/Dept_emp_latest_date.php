<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_emp_latest_date extends Model
{
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
    protected $table = 'dept_emp_latest_date';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_date', 'to_date'
    ];
}
