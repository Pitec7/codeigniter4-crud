<div class="container-lg bg-light">
    <div class="text-center py-4 text-success">
        <h1><?= esc($title) ?></h1>
    </div>

    <?= session()->getFlashdata('error') ?>
    <?= service('validation')->listErrors() ?>

    <form class="p-4" action="/crud/public/stock/item_save/<?= isset($item) ? esc($item['id']) : 0 ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= isset($item) ? esc($item['name']) : '' ?>">
        </div>
        <div class="mb-3">
            <label for="inventory_nb" class="form-label">No inventaire</label>
            <input type="text" class="form-control" id="inventory_nb" name="inventory_nb" value="<?= isset($item) ? esc($item['inventory_nb']) : '' ?>">
        </div>
        <div class="mb-3">
            <label for="buying_date" class="form-label">Date d'achat</label>
            <input type="date" class="form-control" id="buying_date" name="buying_date" value="<?= isset($item) ? esc($item['buying_date']) : '' ?>">
        </div>
        <div class="mb-3">
            <label for="warranty_duration" class="form-label">Durée garantie (en mois)</label>
            <input type="text" class="form-control" id="warranty_duration" name="warranty_duration" value="<?= isset($item) ? esc($item['warranty_duration']) : '' ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
    </form>
</div>