<?php

namespace App\Controllers;
use App\Models\ItemModel;

class Stock extends BaseController
{
    // Méthode pour récupérer tous les items
    public function items_list()
    {
        if (! is_file(APPPATH . 'Views/items/list.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $model = new ItemModel(); // idem: $model = model(ItemModel::class)
        
        $data = [
            'items' => $model->getItems(),
            'title' => lang('Common_lang.list_display'),
        ];

        echo view('templates/header', $data);
        echo view('items/list', $data);
        echo view('templates/footer', $data);
    }

    public function item_save($id = 0)
    {
        if ((! is_file(APPPATH . 'Views/items/form.php')) || (! is_file(APPPATH . 'Views/items/list.php'))) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $model = new ItemModel();

        // Vérifier si c'est un "post" et les champs saisis
        if ($this->request->getMethod() === 'post' && $this->validate([
            'name'              => 'required|min_length[3]|max_length[45]',
            'inventory_nb'      => 'required|min_length[3]|max_length[45]',
            'buying_date'       => 'required|valid_date',
            'warranty_duration' => 'required|numeric|min_length[1]|max_length[11]',
        ])) {
            if ($id === 0) {
                $model->save([
                    'name' => $this->request->getPost('name'),
                    'inventory_nb' => $this->request->getPost('inventory_nb'),
                    'buying_date' => $this->request->getPost('buying_date'),
                    'warranty_duration' => ($this->request->getPost('warranty_duration'))*12,
                ]);
            } else {
                $_POST = [
                    'id' => $id,
                    'warranty_duration' => $_POST['warranty_duration']*12,
                ];
                $model->save($_POST);
            }

            // if ($id === 0) {
            //     $model->save($_POST);
            // } else {
            //     $_POST['id'] = $id;
            //     $model->save($_POST);
            // }

            $data = [
                'items' => $model->getItems(),
                'title' => lang('Common_lang.list_display'),
            ];

            echo view('templates/header', $data);
            echo view('items/list', $data);
            echo view('templates/footer', $data);
        } else {

            $data['title'] = lang('Common_lang.add_item');

            echo view('templates/header', $data);
            echo view('items/form', $data);
            echo view('templates/footer', $data);
        }
    }

    public function item_create()
    {
        if (! is_file(APPPATH . 'Views/items/form.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $data['title'] = lang('Common_lang.add_item');

        echo view('templates/header', $data);
        echo view('items/form', $data);
        echo view('templates/footer', $data);
    }

    public function item_update($id)
    {
        $model = new ItemModel();
        $item = $model->getItems($id); // On peut aussi utiliser: $model->find($id);

        if (! is_file(APPPATH . 'Views/items/form.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $data = [
            'item'  => $item,
            'title' => lang('Common_lang.update_item'),
        ];
        
        // Vérifie si l'item est bien récupéré.
        if (empty($data['item'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(lang('Error_message.item_not_found') . $id);
        }
        
        echo view('templates/header', $data);
        echo view('items/form', $data);
        echo view('templates/footer', $data);
    }

    public function item_delete($id, $confirmation = 0)
    {
        $model = new ItemModel();
        $item = $model->getItems($id); // Idem: $item = $model->find($id);

        if (isset($item)) {
            switch ($confirmation) {
                case 0:
                    $data = [
                        'title' => lang('Common_lang.delete_confirm'),
                        'id'    => $id,
                        'name'  => $item['name'],
                    ];
                    echo view('items/delete_confirm', $data);
                    break;

                case 1:
                    $model->delete($id);

                    $data = [
                        'items' => $model->getItems(),
                        'title' => lang('Common_lang.list_display'),
                    ];
            
                    echo view('templates/header', $data);
                    echo view('items/list', $data);
                    echo view('templates/footer', $data);

                    break;

                default:
                    echo view('errors/url_error');
            }

        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(lang('Error_message.item_not_found') . $id);
        }
    }
}