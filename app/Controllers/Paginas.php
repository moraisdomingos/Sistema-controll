<?php

    class Paginas extends Controller {

        public function index() {
            $this->views('pages/home');
        }

        public function sobre() {
            $this->views('pages/sobre');
        }
    }