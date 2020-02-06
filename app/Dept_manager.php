<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_manager extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var array
     */
    protected $primaryKey = ['dept_no', 'emp_no'];

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
    protected $table = 'dept_manager';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_date', 'to_date'
    ];
}
