<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nom : {{ $mailData['nom'] }}</h1>
    <h3>Email : {{ $mailData['email'] }}</h3>
    <h3>Telephone : {{ $mailData['tel'] }}</h3>
    <h3>Subject : {{ $mailData['subject'] }}</h3>
    <h3>Message : {{ $mailData['message'] }}</h3>
</body>
</html>
