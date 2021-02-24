<?php
    class VKAPI{
        private $token;
        private $userID;
        
        public function VK_get_token($code){
            $params = array(
                'client_id' => VK_ID,
                'client_secret' => VK_SECRET,
                'code' => $code,
                'redirect_uri' => VK_URL
            );

            $token = @json_decode(file_get_contents('http://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

            $this->token = $token['access_token'];
            $this->userID = $token['user_id'];
        }

        public function VK_auth_user(){
            if($this->token){
                $result = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids=$this->userID&access_token=$this->token&v=5.130"), true);
                $result = $result['response'][0];
                
                $name = $result['first_name'] . ' ' . $result['last_name'];

                if ($name){
                    $_SESSION['userName'] = $name;
                    $_SESSION['userStatus'] = 'userVK';
                }
            }
        }
    }