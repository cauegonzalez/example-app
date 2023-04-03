<?php

namespace App\BO;

use App\Repositories\SemesterRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Semester;

class SemesterBO
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
        return SemesterRepository::index();
    }

    /**
    * Get only active resources
    *
    * @return Collection
    */
    public function findActiveSemesters(): Collection
    {
        return SemesterRepository::findActiveSemesters();
    }

    /**
     * Store a new resource in storage
     *
     * @param \App\Http\Requests\SemesterRequest  $request
     * @return Semester
     */
    public function store(array $request): Semester
    {
        return SemesterRepository::store($request);
    }

    /**
     * Update an specific resource in storage.
     *
     * @param \App\Http\Requests\SemesterRequest  $request
     * @param \App\Models\Semester  $semester
     * @return bool
     */
    public function update(array $request, $semester): bool
    {
        return SemesterRepository::update($request, $semester);
    }

    /**
     * Delete an specific resource from storage.
     *
     * @param \App\Models\Semester  $semester
     * @return bool
     */
    public function destroy($semester): bool
    {
        return SemesterRepository::destroy($semester);
    }
}
