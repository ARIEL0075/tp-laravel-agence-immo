<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') Administration</title>
<style>
@layer reset {
  button {
    all: unset;
  }
}

</style>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-primary navbar-dark ">
 <a class="navbar-brand" href="#">Agence</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="{{route('admin.option.index') }}">Gerer les options </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="{{route('admin.property.index') }}">Gerer les biens</a>
     </li>
     
   </ul>
   <div class="ms-auto">
    @auth 
<ul class="navbar-nav">
  <li class="nav-item">
   <form action="{{route('logout')  }}" method="post">
    @csrf
<button class="nav-link">Se deconnecter</button>
    @method('delete')

   </form>
  </li>
</ul>

    @endauth
   </div>
 </div> 
</nav>
    <div class="container">
        @yield('content')

    </div>
   
</body>
</html>