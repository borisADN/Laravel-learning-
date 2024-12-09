<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{env('APP_NAME')}}</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            /* background-color: #1da7ac; */

        }
    </style>
<h2 class="text-6xl font-semibold leading-tight text-center text-gray-900 dark:text-gray-200 underline">{{env('APP_NAME')}}</h2>
    @yield('content')
</body>
</html>