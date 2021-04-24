<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="{{route('somme')}}" method="POST">
 @csrf
    <input type="number"   name="number1"  placeholder="entrer le 1er chiffre">
    <input type="number"  name="number2" placeholder="entrer le 2em chiffre">
    <button type="submit">envoyer</button>
 </form>
 <h2>Resultat</h2>


</body>
</html>