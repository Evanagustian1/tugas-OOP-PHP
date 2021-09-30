<?php

require('kendaraa.php');

class Motor extends Kendaraan
{
    public $roda = 2;

    public function jalan()
    {
        echo "motor sedang berjalan";
    }
}
