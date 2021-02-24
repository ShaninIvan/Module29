<?php
    class Defender{
        // экранирование значений $_GET
        public function hscGet(){
            foreach ($_GET as $key => $value) {
                $_GET[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
            }
        }
        
        // экранирование значений $_POST
        public function hscPost(){
            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
            }
        }

        // Генерация токена
        public function getToken(){
            $token = time() + random_int(0, 100000);
            $token = password_hash($token, PASSWORD_DEFAULT);
            $_SESSION['token'] = $token;
        }

        public function checkToken(){
            if ($_POST){
                if($_SESSION['token'] === $_POST['token']){
                    $this->getToken();
                    return true;
                }else{
                    $this->getToken();
                    exit('Неверный токен!');
                }
            }
        }
    }
