<?php
    class OnlyAuthModel extends Model{
        public function getResult(){
            if ($_SESSION['userStatus'] === 'guest'){
                echo "<script>location.replace('". VK_URL ."')</script>";
            }
        }
    }
?>
