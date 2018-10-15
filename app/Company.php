<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = ['id'];

    /**
     * Returns the employees for this company
     *
     * @return Illuminate\Database\Query\Builder
     */
    public function employees()
    {
    	return $this->hasMany(Employee::class);
    }
}
