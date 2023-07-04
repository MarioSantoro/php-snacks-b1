<!-- /*Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che: -->
<!-- - name sia più lungo di 3 caratteri, -->
<!-- - mail contenga un punto e una chiocciola e -->
<!-- - age sia un numero. -->
<!-- Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./server.php" method="get">
        <input type="text" placeholder="Inserisci il nome" name="username">
        <input type="text" placeholder="Inserisci l'email" name="email">
        <input type="number_format" placeholder="Inserisci la tua età" name="age">
        <input type="submit" value="send">
    </form>
</body>

</html>