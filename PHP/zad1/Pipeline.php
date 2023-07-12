<?php
    class Pipeline{
        public function make(...$functions) {
            return function ($arg) use ($functions) {
                $result = $arg;
                foreach ($functions as $func) {
                    $result = $func($result);
                }
                return $result;
            };
        }
    }
