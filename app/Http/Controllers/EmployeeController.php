<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EmployeeController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $countPerPage = config('app.count_per_page');
        
        $empoyees = Employee::orderBy('emp_no')->paginate($countPerPage);

        return EmployeeResource::collection($empoyees);
    }

    /**
     * @param Employee $employee
     * 
     * @return EmployeeResource
     */
    public function show(Employee $employee): EmployeeResource
    {
        return new EmployeeResource($employee);
    }

    /**
     * @param StoreEmployeeRequest $request
     * 
     * @return EmployeeResource
     */
    public function store(StoreEmployeeRequest $request): EmployeeResource
    {
        $employeeData = $request->validated();

        $employee = new Employee($employeeData);

        $employee->save();

        return new EmployeeResource($employee);
    }

    /**
     * @param UpdateEmployeeRequest $request
     * @param Employee $employee
     * 
     * @return EmployeeResource
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee): EmployeeResource
    {
        $employeeData = $request->validated();

        $employee->update($employeeData);

        return new EmployeeResource($employee);
    }

    /**
     * @param Employee $employee
     * 
     * @return EmployeeResource
     */
    public function destroy(Employee $employee): EmployeeResource
    {
        $employee->delete();

        return new EmployeeResource($employee);
    }
}