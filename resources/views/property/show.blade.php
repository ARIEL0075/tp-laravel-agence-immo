@extends('base')

@section('title', $property->titre)

@section('content')
<div class="container mt-4">
    <h1>{{ $property->titre }}</h1>
    <h2>{{ $property->nbre_de_piece }} pièces - {{ $property->surface }} m²</h2>

    <div class="text-primary" style="font-size:4rem;">
        {{ number_format($property->prix, 0, '', ' ') }} FCFA
    </div>
    <hr>
 @if(session('succes'))
                <div class="alert alert-success">
                    {{ session('succes')}}
                </div>
                @endif
    <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>
        <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
            @csrf

           
            <div class="row">
                @include('shared.input', ['class' => 'col', 'label' => 'Prénom', 'name' => 'prenom'])
                @include('shared.input', ['class' => 'col', 'label' => 'Nom', 'name' => 'nom'])
            </div>
            <div class="row">
                @include('shared.input', ['class' => 'col', 'label' => 'Numéro de téléphone', 'name' => 'numero_de_telephone'])
                @include('shared.input', ['class' => 'col', 'label' => 'Email', 'name' => 'email', 'type' => 'email'])
            </div>
            @include('shared.input', ['class' => 'col', 'label' => 'Votre message', 'name' => 'message', 'type' => 'textarea'])

            <div>
                <button class="btn btn-primary">Nous contacter</button>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <h5>Description :</h5>
        <p>{!! nl2br(e($property->description)) !!}</p>

        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ $property->surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ $property->nbre_de_piece }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ $property->chambre }}</td>
                    </tr>
                    <tr>
                        <td>Étage</td>
                        <td>{{ $property->etage ?: 'Rez-de-chaussée' }}</td>
                    </tr>
                    <tr>
                        <td>Localisation</td>
                        <td>{{ $property->ville }}</td>
                    </tr>
                </table>
            </div>

            <div class="col-4">
                <h2>Spécificités</h2>
                <ul class="list-group">
                    @forelse($property->options as $option)
                        <li class="list-group-item">{{ $option->nom }}</li>
                    @empty
                        <li class="list-group-item">Aucune spécificité</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection