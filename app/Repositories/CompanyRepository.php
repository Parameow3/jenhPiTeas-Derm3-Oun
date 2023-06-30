<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function company_data()
    {
        $data = [];

        $companies = Company::select('id', 'name')->orderby('name', 'asc')->get();

        foreach ($companies as $company) {

            $data[$company->id] = $company->name . "(" . $company->contacts()->count() . ")";

        }

        return $data;
    }
}


