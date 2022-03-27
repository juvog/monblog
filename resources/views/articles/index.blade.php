@extends('base')
@section('content')
    <div class=container>
        <h1 class="text-center mt-5"> Articles </h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-info my-5" href="{{ route('articles.create') }}"><i class="fas fa-plus mx-2"> </i>Ajouter un
                nouvel article</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Créé le</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th>{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->dateFormatted() }}</td>
                        <td class="d-flex">
                            <a href="{{route('articles.edit', $article->id)}}" class="btn btn-warning mx-3">Editer</a>

                            {{-- Bouton supprimer --}}
                            <button type="button" class="btn btn-danger"
                                onclick="document.getElementById('model-open-{{$article->id}}').style.display='block';"> Supprimer
                            </button>
                            <form action={{ route('articles.delete', $article->id) }} method="POST">
                                @csrf
                                @method("DELETE")
                                <div class="modal" id="model-open-{{$article->id}}">
                                    {{-- MODALE --}}
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Suppression</h5>
                                                {{-- Bouton FERMER FENÊTRE --}}
                                                <button type="button" class="close"
                                                data-bs-dismiss="modal"
                                                onclick="document.getElementById('model-open-{{$article->id}}').style.display='none'"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">
                                                        &times;
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>êtes-vous sûr de supprimer cet élément ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                {{-- Bouton OUI --}}
                                                <button type="submit" class="btn btn-primary">oui</button>
                                                {{-- Bouton Annuler --}}
                                                <button type="button" class="btn btn-secondary"
                                                    onclick="getElementById('model-open-{{$article->id}}').style.display='none'"
                                                    data-bs-dismiss="modal">
                                                    Annuler
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div class="d-flex justify-content-center mt-5">
    {{ $articles->links('vendor.pagination.custom') }}
    </div>

    </div>
@endsection
