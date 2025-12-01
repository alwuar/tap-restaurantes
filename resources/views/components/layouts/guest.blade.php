<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Yomy!'}}</title>
    <link rel="icon" href="{{asset ('img/icono.svg')}}" type="image/svg+xml">
    @stack('css')
</head>
<body>
    {{ $slot }}
</body>
</html>