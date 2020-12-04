<?php
namespace App{
    class Vector{
        public int $x;
        public int $y;

        public function __construct(int $x, int $y) {
            $this->x = $x;
            $this->y = $y;
        }
        public function get_len(){
            return sqrt(($this->x)**2 + ($this->y)**2);
        }
        public function isEmptyVector(){
            return $this->get_len() == 0;
        }
        public function isPerpendicular(Vector $vector){
            return ($this->x * $vector->x + $this->y * $vector->y) == 0;
        }
    }
}