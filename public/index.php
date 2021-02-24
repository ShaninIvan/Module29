<?php
    // ini_set('error_reporting', E_ALL);
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    
    session_start();

    define('ROOT', dirname(__DIR__));
    require_once(ROOT . '/app/config/appConfig.php');

    spl_autoload_register(function($class){
        require_once(CORE . "$class.php" );
    });

    $defender = new Defender();
    $defender->hscPost();
    if(!$_SESSION['token']){
        $defender->getToken();
    }else{
        $defender->checkToken();
    }

    if ($_GET['code']){
        $vk = new VKAPI();
        $vk->VK_get_token($_GET['code']);
        $vk->VK_auth_user();
        echo "<script>location.replace('". VK_URL ."')</script>";
    }

    if (!array_key_exists('userStatus', $_SESSION)){
        $_SESSION['userStatus'] = 'guest';
    }

    $router = new Router;
    $router->run();
?>
