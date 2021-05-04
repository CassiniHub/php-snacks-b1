<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        ## Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
        // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di
        // casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60

        // $db = [
        //     [
        //         'home' => 'Dallas Mavericks',
        //         'away' => 'L.A. Lakers',
        //         'homePoints' => 110,
        //         'awayPoints' => 107
        //     ],
        //     [
        //         'home' => 'L.A. Clippers',
        //         'away' => 'Phoenix Suns',
        //         'homePoints' => 103,
        //         'awayPoints' => 115
        //     ]
        // ];

        // foreach ($db as $match) {
        //     echo $match['home'] . ' - ' . $match['away'] . ' | ' . $match['homePoints'] . '-' . $match['awayPoints'];
        //     echo '<br>';
        // };

        // - - - - - - - - - - - - - - - - - - - - - - - - -

        ## Snack 2
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

            $name              = $_GET['name'];
            $mail              = $_GET['mail'];
            $age               = $_GET['age'];
            $needed_mail_chars = ['@', '.'];
            

            if (strlen($name) > 3 && count(array_diff($needed_mail_chars, str_split($mail))) === 0 && is_numeric($age)){
                echo 'Accesso riuscito';
            } else {
                echo 'Accesso negato';
            };
        ?>
</body>
</html>