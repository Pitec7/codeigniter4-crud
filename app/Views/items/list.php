<div class="container-lg bg-light p-4">
    <div class="text-center py-4 text-success">
        <h1><?= esc($title) ?></h1>
    </div>

    <table class="table bg-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">No inventaire</th>
                <th scope="col">Date d'achat</th>
                <th scope="col">Durée garantie</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($items) && is_array($items)) : ?>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <th scope="row"><a class="text-decoration-none" href="/crud/public/stock/item_update/<?= esc($item['id'], 'url') ?>"><i class="bi bi-pencil"></i><?= esc($item['id']) ?></a></th>
                        <td><?= esc($item['name']) ?></td>
                        <td><?= esc($item['inventory_nb']) ?></td>
                        <td><?= esc($item['buying_date']) ?></td>
                        <td><?= esc($item['warranty_duration']) ?></td>
                        <td><a class="text-decoration-none text-danger" href="<?= base_url('stock/item_delete/' . esc($item['id'], 'url')) ?>">X</a></td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <th scope="row">*</th>
                    <td>no item found</td>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>

    <div class="text-center">
        <a class="btn btn-primary my-4" href="<?= base_url('stock/item_create') ?>" role="button">Ajouter un objet</a>
    </div>
</div>