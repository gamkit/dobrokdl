<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .answers {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Анкета волонтера</h1>
    
    <h3>Данные волонтера</h3>

    <p><b>Имя</b> {{ $profile->full_name }}</p>
    <p><b>Дата рождения</b> {{ $profile->born }}</p>
    <p><b>Телефон</b> {{ $profile->phone }}</p>
    <p><b>Email</b> {{ $profile->email }}</p>
    <p><b>Адрес</b> {{ $profile->address }}</p>
    <p><b>Род деятельности</b> {{ $profile->occupation }}</p>
    <hr>




    <h3>Обязанности</h3>

    <p><b>Что именно привлекает Вас в волонтерской деятельности?</b></p>
    <div class="answers">
        {!! $profile->targets !!}
    </div>
    
    <p><b>Есть ли у Вас опыт волонтёрской и добровольческой деятельности?</b></p>
    <div class="answers">
        {!! $profile->experience !!}
    </div>

    <p><b>Какая из действующих программ Фонда Вам наиболее интересна</b> </p>
    <div class="answers">
        {!! $profile->programs !!}
    </div>

    <p><b>Какую помощь Вы готовы оказать</b> </p>
    <div class="answers">
        {!! $profile->favours !!}
    </div>

    <p><b>Помощь в качестве</b></p>
    <div class="answers">
        {!! $profile->positions !!}
    </div>


    <hr>
</body>
</html>