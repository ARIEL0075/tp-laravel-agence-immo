@extends('admin.admin')
@section('title', 'tous les options' )
@section('content')
<div class="d-flex justify-content-between align-items-center">
    @if(session('succes'))
    <div class="alert alert-succes alert-dissimible fade show"  role="alert">
     <span class="font-medium">Succes !</span> {{session('succes')}}

    </div>
    @endif
    <h1>Les options</h1>
    <a href="{{ route('admin.option.create')}}" class="btn btn-primary">Ajoutez une option</a>
</div>

<table class="table table-striped table-bordered">

<thead>
    <tr>
        <th>Nom</th>
       
        <th class="text-end">Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($option as $options)
<tr>
    <td>{{$options->nom}}</td>
    <td>
        <div>
            <a href="{{route('admin.option.edit',$options )}}" class="btn btn-primary">Editer</a>
            <form action="{{route('admin.option.destroy',$options) }}" method="POST" >
                @csrf
                @method("delete")
                <button class="btn btn-danger ">Supprimer</button>
            </form>
        </div>
    </td>
    

    
</tr>
@endforeach
</tbody>
</table>
{{$option->links()}}

@endsection
