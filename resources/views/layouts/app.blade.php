<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content='Благотворительный фонд "Клуб Добрых Людей"'/>
        <meta name="keywords" content="бф, благотворительный фонд, ингушетия, назрань, клуб добрых людей, кдл, кдл добро, бф кдл"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:site_name" content='dobrokdl'/>
        <meta property="og:title" content='Благотворительный фонд "КДЛ"'/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="http://dobrokdl.ru/img/banner.jpg"/>
        <meta property="og:url" content='{{ env("APP_URL") }}'/>
        <meta property="og:locale" content="ru_RU"/>
        <meta property="og:description" content='Благотворительный фонд "Клуб Добрых Людей"'/>

        <title>{{ $title }} | Благотворительный фонд КДЛ</title>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,500,600,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
        <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.header')

        
        @yield('content')


        @include('layouts.footer')
        @include('layouts.modals')

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>