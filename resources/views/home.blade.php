<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kadal Store</title>
</head>
<body class="bg-gray-50 lg:container">
    @include('components.navbar')
    @include('components.banners')
    <div class="w-full h-fit flex justify-center items-center my-4">
        @include('apl.index')
    </div>
    @dd($apls)
    @include('components.footer')
</body>
</html>