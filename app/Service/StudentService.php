<?php

namespace App\Service;

use App\Repositories\StudentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Student;

class StudentService
{
    /**
     * Return initialization page data
     *
     * @return Object
     */
    public function initialize(): Object
    {
        // Your code

        return new \stdClass();
    }

    /**
     * Displays a resource's list
     *
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return StudentRepository::index();
    }

    /**
    * Get only active resources
    *
    * @return Collection
    */
    public function findActiveStudents(): Collection
    {
        return StudentRepository::findActiveStudents();
    }

    /**
     * Store a new resource in storage
     *
     * @param \App\Http\Requests\StudentRequest  $request
     * @return Student
     */
    public function store(array $request): Student
    {
        return StudentRepository::store($request);
    }

    /**
     * Update an specific resource in storage.
     *
     * @param \App\Http\Requests\StudentRequest  $request
     * @param \App\Models\Student  $student
     * @return bool
     */
    public function update(array $request, $student): bool
    {
        return StudentRepository::update($request, $student);
    }

    /**
     * Delete an specific resource from storage.
     *
     * @param \App\Models\Student  $student
     * @return bool
     */
    public function destroy($student): bool
    {
        return StudentRepository::destroy($student);
    }
}
