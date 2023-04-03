<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Http\Requests\SemesterRequest;
use App\Http\Resources\SemesterResource;
use App\BO\SemesterBO;

class SemesterController extends Controller
{
    /**
     * Return initialization page data
     *
     * @return  \Illuminate\Http\Response
     */
    public function initialize()
    {
        $semesterBO = new SemesterBO();
        $semesters = $semesterBO->initialize();

        return SemesterResource::collection($semesters);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesterBO = new SemesterBO();
        $semesters = $semesterBO->index();

        return SemesterResource::collection($semesters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SemesterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemesterRequest $request)
    {
        $semesterBO = new SemesterBO();
        $semester = $semesterBO->store($request->validated());

        return new SemesterResource($semester);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        return new SemesterResource($semester);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SemesterRequest  $request
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(SemesterRequest $request, Semester $semester)
    {
        $semesterBO = new SemesterBO();
        $updated = $semesterBO->update($request->validated(), $semester);

        if ($updated) {
            return new SemesterResource($semester);
        }
        return response()->json([], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semester $semester)
    {
        $semesterBO = new SemesterBO();
        $semesters = $semesterBO->destroy($semester);

        return response()->json("DELETED", 204);
    }
}
