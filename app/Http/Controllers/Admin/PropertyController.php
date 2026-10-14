<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Http\Requests\Admin\PropertyfromRequest;
use App\Models\Option;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.properties.index", [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
         $property->fill([
'surface' => 40,
'chambre'=> 2,
'nbre_de_piece'=> 5,
'etage' => 1,
'ville' => 'PORTO NOVO',
'code_postal'=> 'ZEBETD4',
'vendu' => 1,
        ]);
       
        return view("admin.properties.form", [
            'property' => $property,
            'options' => Option::pluck('nom', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyfromRequest $request)
    {
        
      
      $data = $request->validated();
    $options = $data['options'];
    unset($data['options']);

    $property = Property::create($data);
    $property->options()->sync($options);

   
        return redirect()->route('admin.property.index')->with('succes','Le bien a bien ete cree');
    }

    /**
    
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = Property::findOrfail($id);
      
        return view("admin.properties.form", [
            'property' => $property,
             'options'=>   Option::pluck('nom', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
   
    public function update(PropertyfromRequest $request, Property $property)
{
    $data = $request->validated();
    $options = $data['options'];
    unset($data['options']);

    $property->update($data);
    $property->options()->sync($options);

    return redirect()->route('admin.property.index')->with('succes', 'Le bien a bien été modifié');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $property = Property::findorfail($id);      
     $property->delete();   
      return redirect()->route('admin.property.index')->with('succes','Le bien a bien ete modifié');
    
    }
}
