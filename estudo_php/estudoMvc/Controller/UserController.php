<?php

    class UserController extends BaseController{
        public function listAction() {
            $erroDescription = '';

            $requestMethod  = $_SERVER['REQUEST_METHOD'];
            $queryParams    = $this->getStringParams();

            if($requestMethod == 'GET'){
                try {
                    $userModel = new UserModel();

                    $intLimit = 10;

                    if (isset($queryParams['limit']) && $queryParams['limit']) {
                        $intLimit = (int) $queryParams['limit'];
                    }

                    $userArray = $userModel->getAllUsers($intLimit);

                    return $this->senOutput(json_encode($userArray), array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
                } catch (\Exception $e) {
                    $erroDescription = $e->getMessage();
                    $erroHeader = 'HTTP/1.1 500 Internal Server Error';
                }
            } else {
                $this->sendOutput('', array('HTTP/1.1 405 Method Not Allowed'));
            }

            
        }
    }
