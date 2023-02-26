<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.navbar')
    <div class="flex justify-center items-center mx-auto" id="backgroundcolor">
        <main class="h-full md:h-screen" style="width: 80%">
        @include('dashboard')
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>