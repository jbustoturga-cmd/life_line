<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\HrEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $employees = HrEmployee::all();
        return view('employee.index',compact('employees'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HrEmployee $hrEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HrEmployee $hrEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HrEmployee $hrEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HrEmployee $hrEmployee)
    {
        //
    }
}
