<?php

    class DataBase {

        public function select(int $intLimit) : array {
            try {
                $users = json_decode(file_get_contents(DATABASE_FILE), true);

                $users = array_slice($users, 0, $intLimit);
    
                return $users;
            } catch (\Exception $e) {
                throw $e->getMessage();
            }

            return [];
        }
    }