<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table      = "item";
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'inventory_nb', 'buying_date', 'warranty_duration'];

    public function getItems($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}