<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Http\Requests\ClassroomRequest;
use App\Http\Resources\ClassroomResource;
use App\Service\ClassroomService;

class ClassroomController extends Controller
{
    /**
     * Return initialization page data
     *
     * @return  \Illuminate\Http\Response
     */
    public function initialize()
    {
        $classroomService = new ClassroomService();
        $classrooms = $classroomService->initialize();

        return ClassroomResource::collection($classrooms);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classroomService = new ClassroomService();
        $classrooms = $classroomService->index();

        return ClassroomResource::collection($classrooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ClassroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomRequest $request)
    {
        $classroomService = new ClassroomService();
        $classroom = $classroomService->store($request->validated());

        return new ClassroomResource($classroom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return new ClassroomResource($classroom);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ClassroomRequest  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $classroomService = new ClassroomService();
        $updated = $classroomService->update($request->validated(), $classroom);

        if ($updated)
        {
            return new ClassroomResource($classroom);
        }
        return response()->json([], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroomService = new ClassroomService();
        $classrooms = $classroomService->destroy($classroom);

        return response()->json("DELETED", 204);
    }
}
