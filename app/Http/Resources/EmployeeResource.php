<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            "emp_no" => $this['emp_no'],
            "birth_date" => $this['birth_date'],
            "first_name" => $this['first_name'],
            "last_name" => $this['last_name'],
            "gender" => $this['gender'],
            "hire_date" => $this['hire_date'],
        ];
    }
}