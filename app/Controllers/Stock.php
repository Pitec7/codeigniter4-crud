<?php

namespace App\Controllers;
use App\Models\ItemModel;

class Stock extends BaseController
{
    public function items_list()
    {
        $model = new ItemModel(); // idem: $model = model(ItemModel::class)
        
        $data = [
            'items' => $model->getItems(),
            'title' => 'Item list',
        ];

        echo view('templates/header', $data);
        echo view('items/list', $data);
        echo view('templates/footer', $data);
    }
}