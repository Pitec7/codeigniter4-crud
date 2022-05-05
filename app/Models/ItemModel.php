<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table      = "item";
    protected $primaryKey = 'id';

    public function getItems()
    {
        return $this->findAll();
    }
}