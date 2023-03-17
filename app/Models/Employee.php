<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
  use HasFactory;

  protected string $table = 'employees';

  protected array $fillable = [
    'emp_no',
    'birth_date',
    'first_name',
    'last_name',
    'sex',
    'gender',
    'hire_date',
  ];

  /**
   * @return HasOne
   */
  public function salary(): HasOne
  {
    return $this->hasOne(Salary::class);
  }

  /**
   * @return HasOne
   */
  public function title(): HasOne
  {
    return $this->hasOne(Title::class);
  }

  /**
   * @return BelongsToMany
   */
  public function departments(): BelongsToMany
  {
    return $this->belongsToMany(Department::class);
  }
}