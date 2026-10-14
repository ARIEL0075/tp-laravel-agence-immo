<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\SearchPropertiesRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\PropertyContactMail;
use App\Http\Requests\PropertyContactRequest;

class PropertyyController extends Controller
{
    public function index(SearchPropertiesRequest $request){
$query = Property::query()->orderBy('created_at', 'desc');
if ($prix = $request->validated('prix')){
    $query = $query->where('prix', '<=', $prix);
}
if ($surface = $request->validated('surface')){
    $query = $query->where('surface', '>=', $surface);
}
if ($request->validated('nbre_de_piece')){
    $query = $query->where('nbre_de_piece', '>=', $request->validated('nbre_de_piece'));
}
if ($request->validated('titre')){
    $query = $query->where('titre', 'like' , "%{$request->validated('titre')}%");
}
return view('property.index', [
    'properties' => $query->paginate(16),
    'input'=> $request->validated()
]);
    }

    public function show(string $slug, Property $property)
    {
        $expectedSlug = $property->getSlug();
        if($slug ===!  $expectedSlug){
            return to_route('property.show', ['slug' =>  $expectedSlug, 'property' => $property]);
        }
        return view('property.show', [
            'property' => $property
        ]);
    }
    public function contact(PropertyContactRequest $request, Property $property){
Mail::send(new PropertyContactMail($property, $request->validated()));
return back()->with('succes', 'Votre demande de contact a bien ete envoyé');
    }
}
