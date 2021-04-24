<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('connexion')}}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="text" name="email" placeholder="email">
    <button type="submit">sinscrire</button>
    </form>
</body>
</html>