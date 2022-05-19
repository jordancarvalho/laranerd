<?php


    namespace App\Services;

    class PagesServices {

        private string $title;

        public function __construct() {
            $this->title = 'Pages';
        }

        public function title():string
        {
            return $this->title;
        }

    }
