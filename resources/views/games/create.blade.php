@extends('layouts.app')

@section('title', 'Add a new Game')

@section('content')

<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Add</em> a new Game</h4>
        </div>
        <form method="post" class="form-horizontal" role="form" action="{{ route('games.store') }}">
            @csrf
            <input class="input" type="text" id="name" name="name" placeholder="Name"><br><br>
            <input class="input" type="text" id="description" name="description" placeholder="Description"><br><br>
            <input class="input" type="text" id="price" name="price" placeholder="Price"><br><br>
            <input class="input" type="text" id="released_at" name="released_at" placeholder="Date of release"><br><br>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success btn-block btn-submit" style="border-radius: 50px;">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection