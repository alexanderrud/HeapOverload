<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DepartmentEmployee extends Pivot
{
    use HasFactory;

    protected string $table = 'dept_emp';

    protected array $fillable = [
        'emp_no',
        'dept_no',
        'from_date',
        'to_date'
    ];
}