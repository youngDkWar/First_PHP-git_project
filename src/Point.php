<?php
namespace App{
    class Point{
        public int $x;
        public int $y;

        public function __construct(int $x, int $y) {
            $this->x = $x;
            $this->y = $y;
        }
        public function change(int $x, int $y){
            $this->x = $x;
            $this->y = $y;
        }
    }
}
