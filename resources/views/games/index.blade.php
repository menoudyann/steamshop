@extends('layouts.app')

@section('content')
<h1>Our Games</h1>
<table>
    @foreach ($games as $game)
    <tr>
        <td><?= $game->name ?></td>
    </tr>
    @endforeach
</table>
@endsection