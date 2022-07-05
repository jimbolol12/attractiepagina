<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">

        <main>
        <div class="menu">

            </div>
            <div class="menu1">
                <form action="" method="GET">
                    <select name="afdeling">
                        <option value="">-attractie-</option>
                        <option value="personeel">personeel</option>
                        <option value="horeca">horeca</option>
                        <option value="techniek">techniek</option>
                        <option value="inkoop">inkoop</option>
                        <option value="klantenservice">klantenservice</option>
                        <option value="groen">groen</option>
                    </select>
                </form>
            </div>
            <div class="menu2">
                <form action="" method="GET">
                    <select name="afdeling">
                        <option value="">-hoeveel personen-</option>
                        <option value="personeel">1</option>
                        <option value="horeca">2</option>
                        <option value="techniek">3</option>
                        <option value="inkoop">4</option>
                        <option value="klantenservice">5</option>
                        <option value="groen">6</option>
                    </select>
                </form>
            </div>
            <div class="menu3">
                <form action="" method="GET">
                    <select name="afdeling">
                        <option value="">-fast pass-</option>
                        <option value="personeel">ja</option>
                        <option value="horeca">nee</option>
                    </select>
                </form>
            </div>
          
            
        </div>

    </main>

</body>

</html>
