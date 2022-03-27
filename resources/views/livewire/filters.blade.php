<div>
    <div class="row">
        <div class="col-10">
          {{--  @dump($activeFilters) --}}
            <div class="articles row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-md-6">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <span class="badge bg-info">{{ $article->category->label }}</span>
                                <p class="card-title">{{ $article->subtitle }}</p>
                                <a href="{{ route('article', $article->title) }}" class="btn btn-primary">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-2">
            @foreach ($categories as $category)
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="{{$category->id}}" wire:model="activeFilters.{{$category->id}}"/>
                        <label class="custom-control-label" for="{{$category->id}}">
                            <i class="fas fa-{{$category->icon}}"></i>
                            {{$category->label}}
                        </label>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
