<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_emp extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var array
     */
    protected $primaryKey = ['emp_no', 'dept_no'];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

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
    protected $table = 'dept_emp';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_date', 'to_date'
    ];
}
