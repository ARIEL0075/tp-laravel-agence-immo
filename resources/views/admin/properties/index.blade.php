@extends('admin.admin')
@section('title', 'tout nos biens' )
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>Les biens</h1>
    <a href="{{ route('admin.property.create')}}" class="btn btn-primary">Ajoutez un bien</a>
</div>

<table class="table table-striped table-bordered">

<thead>
    <tr>
        <th>Titre</th>
        <th>Surface</th>
        <th>Prix</th>
        <th>Ville</th>
        <th class="text-end">Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($properties as $property)
<tr>
    <td>{{$property->titre}}</td>
    <td>{{$property->surface}}m²</td>
    <td>{{$property->prix}}FCFA</td>
    <td>{{$property->ville}}</td>
   
 <td>
        <div>
            <a href="{{route('admin.property.edit',$property ) }}" class="btn btn-primary">Editer</a>
            <form action="{{route('admin.property.destroy' , $property) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    
    </td>
</tr>
@endforeach
</tbody>
</table>
{{$properties->links()}}

@endsection
