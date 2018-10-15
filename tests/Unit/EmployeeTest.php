<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \App\User;

class EmployeeTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
        $this->company = factory(\App\Company::class, 1)->create()->first();
        $this->employee = factory(\App\Employee::class, 5)->create([
            'company_id' => $this->company->id
        ])->first();
    }

    /**
     * @test
     */
    public function an_employee_belongs_to_a_company()
    {
        $this->assertEquals($this->company->id, $this->employee->company->id);
    }
}
