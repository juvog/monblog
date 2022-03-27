@extends('base')

@section('content')
    <div>
        <h1 class="display-3 text-center"> Articles </h1>
        @livewire('filters', ['categories' => $categories])

  En cas d'utilisation d'un composant pour l'afficahge des articles,
 le code ci-dessous peut être en conflit avec le nouveau code
  </div class="d-flex justify-content-center mt-5">
    {{ $articles->links('vendor.pagination.custom') }}
    </div>
    </div>
@endsection
