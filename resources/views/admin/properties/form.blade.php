@extends('admin.admin')

@section('title', $property->exists? "Editer un bien" : "Creer un bien")

@section('content')
<h1>@yield('title')</h1>
<div class="container">
<form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', ['property' => $property])}}" method="post">
    @csrf

    @method($property->exists ? 'put' : 'post')
    <div class="row">
        @include('shared.input', ['class'=>'col','label'=>'Titre', 'name'=>'titre', 'value'=>$property->titre])
  <div class="col row">
 @include('shared.input', ['class'=>'col','label'=>'Surface', 'name'=>'surface', 'value'=>$property->surface])   
 @include('shared.input', ['class'=>'col','label'=>'Prix', 'name'=>'prix', 'value'=>$property->prix])     
</div>

    </div>
     @include('shared.input', ['label'=>'description', 'name'=>'description', 'type'=>'textarea', 'value'=>$property->description])   
<div class="row">

@include('shared.input', ['class'=>'col','label'=>'Chambre', 'name'=>'chambre', 'value'=>$property->chambre])   
 @include('shared.input', ['class'=>'col','label'=>'Piece', 'name'=>'nbre_de_piece', 'value'=>$property->nbre_de_piece])   

 @include('shared.input', ['class'=>'col','label'=>'Etage', 'name'=>'etage', 'value'=>$property->etage])   
</div>
<div class="row">

@include('shared.input', ['class'=>'col','label'=>'Ville', 'name'=>'ville', 'value'=>$property->ville])   
 @include('shared.input', ['class'=>'col','label'=>'Adresse', 'name'=>'adresse', 'value'=>$property->adresse])   
@include('shared.input', ['class'=>'col','label'=>'Code Postal', 'name'=>'code_postal', 'value'=>$property->code_postal, ])   


</div>

  @include('shared.select', ['label'=>'Options', 'name'=>'options', 'value'=>$property->options()->pluck('id'),"options" => $options, 'multiple'=> true ])   
@include('shared.checkbox', ['label'=>'Vendu', 'name'=>'vendu', 'value'=>$property->vendu, ])   
    <div>
        <button type="submit" class="btn btn-primary">
          {{$property->exists? "Modifier" : "Creer"}}
        </button>
    </div>
</form>
@endsection