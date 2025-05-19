<?php

    class BaseController {
        public function __call($name, $arguments) {
            $this->sendOutput('', array('http/1.1 404 Not Found'));
        }

        protected function getStringParams() : array {
            parse_str($_SERVER['QUERY_STRING'], $query);

            return $query;
        }

        protected function senOutput($data, $httpHeaders = array()) {
            header_remove('set-cookie');

            if (is_array($httpHeaders) && count($httpHeaders)) {
                foreach ($httpHeaders as $header) {
                    header($header);
                }
            
            }

            echo $data;
        }
    }