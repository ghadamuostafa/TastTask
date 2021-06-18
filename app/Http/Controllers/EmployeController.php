<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\Http\Requests\StoreEmployeRequest;    
use App\Http\Requests\UpdateEmployeRequest;  
class EmployeController extends Controller
{
    public function index()
    {
        $employees = employees::paginate(10);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('employees.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeRequest $request)
    {
        employees::create($request->all());
        return redirect()->route('Employees.index')->with(['message' => 'employe create successfully']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = employees::findOrFail($id);
        return view('employees.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeRequest $request, $id)
    {
         $employe = employees::findOrFail($id);
        $employe->update($request->all());
        return redirect()->route('Employees.index')->with(['message' => 'employe updated successfully']);;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employees::findOrFail($id)->delete();

      
        return redirect()->route('Employees.index');
    }
}
