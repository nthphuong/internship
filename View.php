<?php

Class View {
    private $controller;

    function view($controller) {
        $this->controller = $controller;
    }

    function output() {
        return $this->controller;
    }
}