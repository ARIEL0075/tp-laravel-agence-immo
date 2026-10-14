<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>@yield('title') AgentImmo</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-primary navbar-dark ">
 <a class="navbar-brand" href="{{ route('property.acc')}}">Agence</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="{{route('property.index') }}">Biens </a>
     </li>
   
   </ul>
 </div> 
</nav>
   
        @yield('content')

  
   
</body>
</html>