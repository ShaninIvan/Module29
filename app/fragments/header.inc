<?php
    if($_SESSION['userStatus'] === 'guest'){
        $username = 'Гость';
    }else{
        $username = $_SESSION['userName'] . ' (' . $_SESSION['userStatus'] . ')';
    } 
?>

<form method="POST" action="" class="header__userPanel">
<input type="hidden" name="token" value=<?= $_SESSION['token'] ?>>
    <div>Привет, <?= $username ?></div>
    <?php
        if ($_SESSION['userStatus'] === 'guest'){
            include_once(FRAGMENTS . 'header_guestPanel.inc');
        }else{
            include_once(FRAGMENTS . 'header_userPanel.inc');
        }
    ?>
    <div class="response"><?= $_SESSION['response'] ?></div>
    <?php
        $_SESSION['response'] = '';
    ?>
    
</form>

<div class="header__logo">Модуль 29</div>

