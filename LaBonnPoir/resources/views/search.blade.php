@extends('layouts.app')

@section('content')
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group container">
        <input type="text" class="form-control" name="q" placeholder="Recherche par nom d'annonce"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
<br>
<div class="container">
    @if(isset($details))
    <p> Les résultats de votre recherche <b> {{ $query }} </b> sont :</p>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre de l'article</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td><a style="color: #1e137b;" href="annonces/voir/<?= $user['id'] ?>">{{$user->title}}</a></td>
                <td>{{$user->price}} €</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection