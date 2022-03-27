<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>coucou</title>
</head>

<body>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS Lien web (à privilégier si l'on ne souhaite pas de mise em page particulière)-->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}




    {{-- Editeur TinyCloud --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


  <!-- Bootstrap CSS (lien vers un fichier css. Tout le code provient du site https://bootswatch.com/ Le modèle choisi est Unity -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">

    <title>Hello, world!</title>
    @livewireStyles
</head>

<body>


    @include('incs.navbar')
    <div class="container justify-content-center mt-3">
        @include('incs.flash')
    </div>
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
     <script src="https://kit.fontawesome.com/d87390d8eb.js" crossorigin="anonymous"></script>







    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->

    @livewireScripts
</body>

</html>
