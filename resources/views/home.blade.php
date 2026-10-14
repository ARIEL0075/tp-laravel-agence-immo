@extends('base')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
<h1> Agence Immo Ariel</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam repudiandae et maiores voluptatibus amet accusantium dolore repellat, laboriosam deserunt, aspernatur eaque eligendi consequuntur voluptates quo asperiores non, mollitia ab velit!</p>
</div>
<div class="container">
    <h2>Nos derniers biens</h2>
    <div class="row">
          @foreach($properties as $property)
        <div class="col">
 @include('property.card')


   
        </div>
        @endforeach
    </div>
 
</div>
@endsection