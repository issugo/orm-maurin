<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var array
     */
    protected $primaryKey = ['emp_no', 'from_date'];

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
    protected $table = 'salaries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salary', 'from_date', 'to_date'
    ];

    public function employees() {
        return $this->belongsTo('App\Employee', 'emp_no');
    }
}
