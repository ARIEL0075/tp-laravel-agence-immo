@extends('base')

@section('title', 'Se connecter')

@section('content')
<div class="mt-4 container">
    <h1>Se connecter</h1>
    @if(session('success'))
        <div class="alert alert-success">
         {{session('success')}}   
        </div>
    @endif
    <form action="{{route('login')}}" method="post" class="vstack gap-3">
    @csrf
 @include('shared.input', ['class' => 'col', 'label' => 'Email', 'name' => 'email', 'type' => 'email'])

  @include('shared.input', ['class' => 'col', 'label' => 'Mot de passe', 'name' => 'password', 'type' => 'password'])
<div>
    <button class="btn btn-primary">Se connecter</button>
</div>
  
</form>
</div>
@endsection