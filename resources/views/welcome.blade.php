@extends('layout')

@section('content')

<a href="{{ route('post.index') }}" class="text-blue-500 underline">Voir les articles</a><br>
@auth
<a href="{{ route('logout') }}" class="text-blue-500 underline">Se déconnecter</a>
<p class="text-green-500 font-bold" >{{ Auth::user()->name }}</p><br>
<p class="text-green-500">Vous êtes connecté!</p>
<hr>
@endauth

@guest
<a href="{{ route('register') }}" class="text-blue-500 underline">S'inscrire</a>
 <a href="{{ route('login') }}" class="text-blue-500 underline">Se connecter</a> 
    <p class="text-red-500">Vous n'êtes pas connecté!</p>
    <hr>
@endguest

@endsection