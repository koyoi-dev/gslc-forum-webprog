@extends('layouts.app')

@section('title', 'Watchlist')

@section('content')
    <h1 class="mb-3 fw-bold">My Watchlist</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($watchlist as $anime)
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-top"
                         style="height: 300px; background-color: green; background-image: url('{{ $anime['image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-0">{{ $anime['title'] }}</p>
                        @switch($anime['watched'])
                            @case("Finished")
                                <span class="badge text-bg-primary">Finished</span>
                                @break

                            @case("Watching")
                                <span class="badge text-bg-warning">Watching</span>
                                @break

                            @default
                                <span class="badge text-bg-secondary">Later</span>
                        @endswitch
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
