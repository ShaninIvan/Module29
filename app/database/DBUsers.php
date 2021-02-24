<?php
    class DBUsers{
        public function __construct($connect)
        {
            $this->connect = $connect;
        }

        public function db_users_find($login){
            $sql = 'SELECT * FROM Users WHERE `login` = ?';
            $stmt = $this->connect->prepare($sql);
            $data = array($login);
            $stmt->execute($data);
            return $stmt->fetch();
        }

        // Добавление пользователя в таблицу Users
        public function db_users_create($login, $password){
            $sql = 'INSERT INTO Users (`login`, `password`) VALUES (?, ?)';
            $stmt = $this->connect->prepare($sql);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $data = array($login, $password);
            return $stmt->execute($data);
        }
    }
?>
