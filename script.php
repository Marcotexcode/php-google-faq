
<?php

    $database = [

        [
            'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'risposta' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
        ],
        [
            'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'risposta' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
        ],
        [
            'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'risposta' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
        ],
        [
            'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'risposta' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
        ],
        [
            'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'risposta' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.'
        ]

    ]
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container-general">

        <div class="container-header">

            <div class="container-header--image">

                <img class="container-header--image--img" src="img/logo.png" alt="google">
                <span class="container-header--image--text">Privaci e termini</span>

            </div>

        </div>

        <div class="container-header--menu">

            <ul class="container-header--menu--items">
                <li class="container-header--menu--items--item">Introduzione</li>
                <li class="container-header--menu--items--item">Norme sulla privacy</li>
                <li class="container-header--menu--items--item">Termini e servizi</li>
                <li class="container-header--menu--items--item">Tecnologie</li>
                <li class="container-header--menu--items--item item-active">Domande frequenti</li>
            </ul>

        </div>


        <div class="container-main">

            <?php foreach ($database as $data) {?>

            <h2 class="container-main--title"> <?php echo $data['domanda']?> </h2>
            
            <p class="container-main--text"> <?php echo $data['risposta']?> </p>

            <?php } ?>
            

        </div>

    </div>

</body>
</html>