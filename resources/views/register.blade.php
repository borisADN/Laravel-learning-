@extends('layout')

@section('content')


<form action="{{ route('register') }}" method="POST" class="flex flex-col items-center justify-center min-h-screen gap-4 p-4 bg-gray-50">
    @csrf
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Register</h1>
    
    <!-- Nom -->
    <input type="text" name="name" placeholder="Name" class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ old('name') }}">

    @error('name')
    <span class="text-red-500">le nom est obligatoire</span>
    @enderror

    <!-- Email -->
    <input type="email" name="email" placeholder="Email" class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ old('email') }}">
    
    @error('email')
    <span class="text-red-500">l'email est obligatoire</span>
    @enderror

    <!-- Mot de passe -->
    <input type="password" name="password" placeholder="Password" class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

    @error('password')
    <span class="text-red-500">{{ $message }}</span>
    @enderror

    <!-- Confirmation du mot de passe -->
    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

    <!-- Bouton de soumission -->
    <button type="submit" class="w-full max-w-md bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Register</button>
</form>


@endsection