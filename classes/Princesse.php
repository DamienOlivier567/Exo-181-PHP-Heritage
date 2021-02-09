<?php


class Princesse extends Personnage
{
    private $saved;

    public function __construct() {

        parent::__construct();

        $this->saved = 0;
        $this->x = 450;
        $this->y = 450;
    }
}