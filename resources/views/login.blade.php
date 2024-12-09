@extends('layout');

@section('content')
<form action="{{ route('login') }}" method="POST" class="flex flex-col items-center justify-center min-h-screen gap-4 p-4 bg-gray-50">
    @csrf
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Login</h1>
    <input type="email" name="email" placeholder="Email" class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    <input type="password" name="password" placeholder="Password" class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    @error('error')
    <p class="text-red-500 text-xs">{{ $message }}</p>
        
    @enderror
    <button type="submit" class="w-full max-w-md bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
</form>

@endsection