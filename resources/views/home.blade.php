<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kadal Store</title>
</head>
<body class="bg-gray-50 lg:container flex flex-col items-center justify-center">
    @include('components.navbar')
    <div class="w-[960px] h-auto flex flex-col justify-center items-center">
        @include('components.banners')
        <div class="w-full h-fit flex justify-center items-center my-4">
            @include('apl.index')
        </div>
    </div>
    @include('components.footer')
</body>
</html>