@extends('layouts.app')

@section('title', 'Our Gaming Catalog')

@section('content')

<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Your Gaming</em>Catalog</h4>
        </div>
        <?php foreach ($games as $game) : ?>
            <div class="item">
                <ul>
                    <li><img src="{{asset('images/game-03.jpg')}}" alt="" class="templatemo-item"></li>

                    <li>
                        <h4><?= $game->name ?></h4><span>Titre</span>
                    </li>
                    <li>
                        <h4><?= date('d-m-Y', strtotime($game->released_at)); ?></h4><span>Date of Release</span>
                    </li>
                    <li>
                        <h4></h4>
                    </li>
                    <li>
                        <h4><?= $game->price ?> CHF</h4><span>Price</span>
                    </li>
                    <li>
                        <div class="main-border-button pull-right"><a href="#">Buy</a></div>
                    </li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
        </div>
    </div>
</div>
@endsection