<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = ['id'];

    /**
     * Returns the employee's company
     *
     * @return Illuminate\Database\Query\Builder
     */
    public function company()
    {
    	return $this->belongsTo(Company::class);
    }
}
