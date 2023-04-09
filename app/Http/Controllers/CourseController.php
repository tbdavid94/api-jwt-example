<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\UserCourse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $payload = $request->toArray();
        $payload['user_id'] = auth()->id();
        $payload['status'] = 1;
        Course::query()->firstOrCreate($payload);
        return response()->json(['status' => 'create course done']);
    }

    public function register($courseId)
    {
        Course::query()->findOrFail($courseId);
        $userId = auth()->id();
        $course = UserCourse::query()->course($courseId)->first();
        if (!$course) {
            UserCourse::query()->create([
                'user_id' => $userId,
                'course_id' => $courseId
            ]);
            return response()->json(['status' => 'register success']);
        }

        return response()->json(['status' => 'you are register']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
