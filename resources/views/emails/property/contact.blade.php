<x-mail::message>
#  Nouvelle demande de contact

Une nouvelle demande de contact a ete fait pour le bien <a href="{{route('property.show', ['slug'=>$property->getSlug(), 'property'=>$property] )  }}">{{ $property->titre }}</a>

- Prenom : {{$data['prenom']}}
- Nom : {{$data['nom']}}
- Telephone : {{$data['numero_de_telephone']}}

---Message--- <br>
{{$data['message']}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
