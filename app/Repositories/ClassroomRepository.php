<?php

namespace App\Repositories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ClassroomRepository
{
    public function __construct()
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public static function index(): LengthAwarePaginator
    {
        return Classroom::paginate();
    }

    /**
     * @return Collection
     */
    public static function findActiveClassrooms($columns = ['id','name']): Collection
    {
        return Classroom::active()
            ->get($columns);
    }

    /**
     * @return Classroom
     */
    public static function store($arrayClassroom): Classroom
    {
        return Classroom::create($arrayClassroom);
    }

    /**
     * @return bool
     */
    public static function update($arrayClassroom, $classroom): bool
    {
        return $classroom->update($arrayClassroom);
    }

    /**
     * @return bool
     */
    public static function destroy($classroom): bool
    {
        return $classroom->delete();
    }

}
