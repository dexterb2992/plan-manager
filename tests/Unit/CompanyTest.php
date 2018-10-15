<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \App\User;

class CompanyTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
        $this->company = factory(\App\Company::class, 1)->create()->first();
        $this->employees = factory(\App\Employee::class, 5)->create([
            'company_id' => $this->company->id
        ]);
    }

    /**
     * @test
     */
    public function a_company_has_many_users()
    {
        $this->assertEquals($this->company->employees->count(), 5);
    }
}
