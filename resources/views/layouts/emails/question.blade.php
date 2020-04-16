<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Вопросы к фонду (новый вопрос)</h1>
    
    <h4>Имя</h4>
    <p>{{ $question->first_name }} {{ $question->last_name }} </p>
    
    <h4>Почта</h4>
    <p>{{ $question->email }} </p>

    <h4>Телефон</h4>
    <p>{{ $question->phone }} </p>
    
    <h4>Вопрос</h4>
    <p>{{ $question->message }} </p>

    <hr>
</body>
</html>