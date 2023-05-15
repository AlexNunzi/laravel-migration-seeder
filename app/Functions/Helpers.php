<?php

namespace App\Functions;

class Helpers {

    public static function getCsvContent(string $path) {

        $data = [];

        $file = fopen($path, 'r');

        if ($file === false) {
            exit('Impossibile aprire il file al percorso specificato');
        }

        while (($row = fgetcsv($file)) !== FALSE) {
            $data[] = $row;
        }

        return $data;

    }

}