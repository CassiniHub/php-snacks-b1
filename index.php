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

        $db = [
            [
                'home' => 'Dallas Mavericks',
                'away' => 'L.A. Lakers',
                'homePoints' => 110,
                'awayPoints' => 107
            ],
            [
                'home' => 'L.A. Clippers',
                'away' => 'Phoenix Suns',
                'homePoints' => 103,
                'awayPoints' => 115
            ]
        ];

        foreach ($db as $match) {
            echo $match['home'] . ' - ' . $match['away'] . ' | ' . $match['homePoints'] . '-' . $match['awayPoints'];
            echo '<br>';
        };
    ?>
</body>
</html>