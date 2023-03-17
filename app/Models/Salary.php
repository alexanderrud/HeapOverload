<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Salary extends Model
{
    use HasFactory;

    protected string $table = 'salaries';

    protected array $fillable = [
        'emp_no',
        'salary',
        'from_date ',
        'to_date'
    ];

    /**
     * @return BelongsTo
     */
    public function emploee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}