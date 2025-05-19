<?php 

    class UserModel extends DataBase{

        public function getAllUsers(int $intLimit) : array {
            try {
                $users = $this->select($intLimit);

                return $users;
            } catch (\Exception $e) {
                throw $e->getMessage();
            }

            return [];
        }
       
    }