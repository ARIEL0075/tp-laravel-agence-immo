<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Http\Requests\Admin\OptionfromRequest;
class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.option.index", [
            'option' => option::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option = new option();
       
        return view("admin.option.form", [
            'option' => $option
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionfromRequest $request)
    {
        $option = option::create($request->validated());
        return redirect()->route('admin.option.index')->with('succes','l\'option a bien ete cree');
    }

    /**
    
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $option = Option::findOrfail($id);
      
        return view("admin.option.form", [
            'option' => $option
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(OptionfromRequest $request, string $id)
    {
     $option = Option::findorfail($id);   
        $option->update($request->validated());
         return redirect()->route('admin.option.index')->with('succes','L\'option a bien ete modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $option = Option::findorfail($id);      
     $option->delete();   
      return redirect()->route('admin.option.index')->with('succes','L\'option a bien ete modifié');
    
    }
}