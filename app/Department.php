<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * Le type de la primary key
     *
     * @var string
     */
    protected $keyType = "string";

    /**
     * Desactive l'incrementation automatique
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'dept_no';

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
    protected $table = 'departments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dept_name'
    ];

    public function employees() {
        return $this->belongsToMany('App\Employee', 'dept_emp', 'dept_no', 'emp_no')->withPivot('from_date', 'to_date');
    }

    public function manager() {
        return $this->belongsToMany('App\Department', 'dept_manager', 'emp_no', 'dept_no')->withPivot('from_date', 'to_date');
    }
}
