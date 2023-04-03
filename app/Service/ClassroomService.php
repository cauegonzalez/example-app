<?php

namespace App\Service;

use App\Repositories\ClassroomRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Classroom;

class ClassroomService
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
        return ClassroomRepository::index();
    }

    /**
    * Get only active resources
    *
    * @return Collection
    */
    public function findActiveClassrooms(): Collection
    {
        return ClassroomRepository::findActiveClassrooms();
    }

    /**
     * Store a new resource in storage
     *
     * @param \App\Http\Requests\ClassroomRequest  $request
     * @return Classroom
     */
    public function store(array $request): Classroom
    {
        return ClassroomRepository::store($request);
    }

    /**
     * Update an specific resource in storage.
     *
     * @param \App\Http\Requests\ClassroomRequest  $request
     * @param \App\Models\Classroom  $classroom
     * @return bool
     */
    public function update(array $request, $classroom): bool
    {
        return ClassroomRepository::update($request, $classroom);
    }

    /**
     * Delete an specific resource from storage.
     *
     * @param \App\Models\Classroom  $classroom
     * @return bool
     */
    public function destroy($classroom): bool
    {
        return ClassroomRepository::destroy($classroom);
    }
}
