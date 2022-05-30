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
        // Dans la base de donnée la warranty est enregistrée en mois, là on convertit en année
        if ($id === false) {
            $items = $this->findAll();
            foreach ($items as $key => $warranty) {
                $items[$key]['warranty_duration'] = round(($warranty['warranty_duration']/12), 1);
            }
            return $items;
        } else {
            $item = $this->where(['id' => $id])->first();
            $item['warranty_duration'] = round(($item['warranty_duration']/12), 1);
            return $item;
        }
    }

    // public function getItems($id = false)
    // {
    //     if ($id === false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}