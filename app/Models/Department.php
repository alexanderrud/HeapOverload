<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'dept_no';

    protected $fillable = [
        'dept_no',
        'dept_name'
    ];

    /**
     * @return BelongsToMany
     */
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'dept_emp', 'emp_no', 'dept_no');
    }

    /**
     * @return BelongsToMany
     */
    public function managers(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'dept_manager', 'emp_no', 'dept_no');
    }
}