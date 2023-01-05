@extends('layouts.app')

@section('title', 'Our Gaming Catalog')

@section('content')

<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Your Gaming</em> Catalog</h4>
        </div>
        <?php foreach ($games as $game) : ?>
            <div class="item">
                <ul>
                    <li><img src="{{asset('images/game-03.jpg')}}" alt="" class="templatemo-item"></li>

                    <li>
                        <h4><?= $game->name ?></h4>
                    </li>
                    <li>
                        <h4><?= $game->released_at ?></h4>
                    </li>
                    <li>
                        <h4><?= $game->price ?> CHF</h4>
                    </li>
                    <li>
                        <form action="{{ route('games.show', $game) }}" method="GET">
                            @csrf
                            <div class="main-button">
                                <button class="btn btn-success">Buy</button>
                            </div>
                        </form>
                    </li>
                    <li>
                        @if (Auth::check())
                        <form action="{{ route('games.destroy', $game) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="main-button">
                                <button class="btn btn-danger" style="height: 40px; width: 40px"><i class="fa fa-trash"></i></button>
                            </div>
                        </form>
                        @endif
                    </li>
                </ul>
            </div>
        <?php endforeach; ?>
        @if (Auth::check())
        <div class="main-button">
            <a href="{{ route('games.create') }}">Add a new game</a>
        </div>
        @endif
    </div>
    <div class="col-lg-12">
        <div class="main-button">
        </div>
    </div>
</div>
@endsection