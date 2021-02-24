<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Только для авторизованных</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
        <header>
            <?php
            include_once(FRAGMENTS . 'header.inc');
            ?>
        </header>

        <main>
            <?php
                include_once(FRAGMENTS . 'onlyAuth_forUsers.php');
                if($_SESSION['userStatus'] === 'userVK'){
                    include_once(FRAGMENTS . 'onlyAuth_forVKUsers.php');
                }
            ?>
        </main>

        <footer>
            <?php
            include_once(FRAGMENTS . 'footer.inc');
            ?>
        </footer>
    </div>
</body>
</html>