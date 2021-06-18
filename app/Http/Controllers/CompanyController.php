<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
use App\Http\Requests\StoreCompanyRequest;    
use App\Http\Requests\UpdateCompanyRequest;    


class CompanyController extends Controller
{
  public function index()
    {
        $companies = company::paginate(10);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('company.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest  $request)
    {
          
        if ($request->file('logo')) {
          $imagePath = $request->file('logo');
          $imageName = $imagePath->getClientOriginalName();

          $path = $request->file('logo')->storeAs('uploads', $imageName, 'public');
            $request->logo=$path;
        }
       
    
      
      
    
        company::create($request->all());
        return redirect()->route('Companies.index')->with(['message' => 'company create successfully']);
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
        $company = company::findOrFail($id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, $id)
    {
        $company = company::findOrFail($id);
        $company->update($request->all());
        return redirect()->route('Companies.index')->with(['message' => 'company updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         company::findOrFail($id)->delete();

      
        return redirect()->route('Companies.index');
    }
}
