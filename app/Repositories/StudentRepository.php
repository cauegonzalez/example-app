<?php

namespace App\Repositories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class StudentRepository
{
    public function __construct()
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public static function index(): LengthAwarePaginator
    {
        return Student::paginate();
    }

    /**
     * @return Collection
     */
    public static function findActiveStudents($columns = ['id','name']): Collection
    {
        return Student::active()
            ->get($columns);
    }

    /**
     * @return Student
     */
    public static function store($arrayStudent): Student
    {
        return Student::create($arrayStudent);
    }

    /**
     * @return bool
     */
    public static function update($arrayStudent, $student): bool
    {
        return $student->update($arrayStudent);
    }

    /**
     * @return bool
     */
    public static function destroy($student): bool
    {
        return $student->delete();
    }

}
