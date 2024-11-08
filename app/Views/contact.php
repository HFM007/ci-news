<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>
    <?= $this->extend('layout/page_layout') ?>
    <?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3 class="h3">Hello <?= $name?></h3>
            <p>Silahkan hubungi kami melalui form berikut ini!</p>
            <form action="" class="form">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Message</label>
                <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Kirim" class="btn btn-primary w-100">
            </div>

            </form>

            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
</body>
</html>