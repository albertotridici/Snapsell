<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SNAP SELL</title>
</head>
<body style="background-color: rgb(244,244,244)">
    <div>
        <h1 style="font-size: 4vw;
        color:rgb(0, 175, 185)" >Un utente ha richiesto di lavorare con noi!</h1>
        <h2 style="font-size: 3vw;
        color:rgb(0, 175, 185);">Ecco i suoi dati: </h2>
        <h3 style="font-size: 2vw">Nome: {{$user->name}}</h3>
        <h4 style="font-size: 2vw" >Email: {{$user->email}}</h4>
        <p>se vuoi renderlo revisore clicca qui:</p>
        <a style="    background-color:rgb(0, 175, 185) ;
        padding: 14px 0;
        border-radius: 12px;
        color: white;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        width: 200px;
        display: block;
        text-align: center;" href="{{route('make.revisor',compact('user'))}}">Rendi revisore</a>

    </div>
</body>
</html>