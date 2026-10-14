@extends('admin.admin')

@section('title', $option->exists? "Editer une option" : "Creer une option")

@section('content')
<h1>@yield('title')</h1>
<div class="container">
<form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', ['option' => $option])}}" method="post">
    @csrf

    @method($option->exists ? 'put' : 'post')
    <div class="row">
        @include('shared.input', ['class'=>'col','label'=>'Nom', 'name'=>'nom', 'value'=>$option->nom])

</div>

    <div>
        <button type="submit" class="btn btn-primary">
          {{$option->exists? "Modifier" : "Creer"}}
        </button>
    </div>
</form>