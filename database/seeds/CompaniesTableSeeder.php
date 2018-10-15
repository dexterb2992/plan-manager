<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Employee;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = factory(Company::class, 5)->create()->each(function ($company) {
        	factory(Employee::class, random_int(1, 20))->create([
        		'company_id' => $company->id
        	]);
        });
    }
}
