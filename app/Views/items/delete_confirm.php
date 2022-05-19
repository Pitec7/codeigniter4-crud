<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title><?= esc($title) ?></title>
</head>

<body class="d-flex justify-content-center align-items-center bg-dark">
    <div class="bg-light mt-5 rounded-3 text-center">
        <div class="row p-3">
            <h2>Êtes-vous sûr de vouloir supprimer <?= esc($name) ?>?</h2>
        </div>
        <div class="row p-3">
            <div class="col">
                <a class="btn btn-danger" href="<?= base_url('stock/item_delete/' . esc($id, 'url') . '/' . esc(1, 'url')) ?>" role="button">Supprimer</a>
            </div>
            <div class="col">
                <a class="btn btn-secondary" href="<?= base_url('stock/items_list') ?>" role="button">Annuler</a>
            </div>
        </div>
    </div>
</body>

</html>