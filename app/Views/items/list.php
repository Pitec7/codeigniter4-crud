<div class="container-lg bg-light">
    <div>
        <h1 class="d-flex justify-content-center text-success mb-4"><?= esc($title) ?></h1>
    </div>

    <table class="table bg-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">No inventaire</th>
                <th scope="col">Date d'achat</th>
                <th scope="col">Durée garantie</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($items) && is_array($items)) : ?>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <th scope="row"><?= esc($item['id']) ?></th>
                        <td><?= esc($item['name']) ?></td>
                        <td><?= esc($item['inventory_nb']) ?></td>
                        <td><?= esc($item['buying_date']) ?></td>
                        <td><?= esc($item['warranty_duration']) ?></td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <th scope="row">*</th>
                    <td>no item found</td>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>