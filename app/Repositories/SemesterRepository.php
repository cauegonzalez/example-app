<?php

namespace App\Repositories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Semester;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SemesterRepository
{
    public function __construct()
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public static function index(): LengthAwarePaginator
    {
        return Semester::paginate();
    }

    /**
     * @return Collection
     */
    public static function findActiveSemesters($columns = ['id','name']): Collection
    {
        return Semester::active()
            ->get($columns);
    }

    /**
     * @return Semester
     */
    public static function store($arraySemester): Semester
    {
        return Semester::create($arraySemester);
    }

    /**
     * @return bool
     */
    public static function update($arraySemester, $semester): bool
    {
        return $semester->update($arraySemester);
    }

    /**
     * @return bool
     */
    public static function destroy($semester): bool
    {
        return $semester->delete();
    }

}
