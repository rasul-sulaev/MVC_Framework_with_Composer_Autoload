<?php

namespace App\models;

use App\core\Model;

class Main extends Model {
    public function getNews() {
        return $this->db->fetchAll('SELECT * FROM news');
    }
}