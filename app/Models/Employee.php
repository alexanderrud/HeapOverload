<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
  use HasFactory;

  protected $primaryKey = 'emp_no';

  protected $table = 'employees';

  protected $fillable = [
    'emp_no',
    'birth_date',
    'first_name',
    'last_name',
    'sex',
    'gender',
    'hire_date',
  ];

  /**
   * @return HasMany
   */
  public function salaries(): HasMany
  {
    return $this->hasMany(Salary::class, 'emp_no');
  }

  /**
   * @return HasOne
   */
  public function title(): HasOne
  {
    return $this->hasOne(Title::class, 'emp_no');
  }
}