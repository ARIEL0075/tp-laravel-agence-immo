<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug'=> $property->getSlug(), 'property'=>$property  ]) }}">{{$property->titre}}</a>

        </h5>
       <p class="card-text"> {{ $property->surface }}m² - {{ $property->ville }}</p>
       <div class="text-primary" style="font-size: 1.4rem; font-weight: bold;">
        {{ number_format($property->prix, thousands_separator: ' ')}} FCFA
       </div>
    </div>
</div>