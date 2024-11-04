<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faqs</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>
    <?= $this->extend('layout/page_layout') ?>
    <?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <h2 class="h2">Apa itu CI Neews?</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis numquam, quaerat exercitationem amet quas, earum distinctio eaque aliquid, provident illo sint iure molestias similique est consectetur iusto sunt alias tempora.</p>
            <h2 class="h2">Bagaimana cara membuat akun CI Neews</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum eaque quis repellat vero facilis cum ea reiciendis consequuntur, veniam nobis quae libero atque doloremque sapiente quidem commodi iste rerum? Pariatur!</p>
            <h2 class="h2">Bagaimana cara menulis Artikel di CI Neews</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sed, tenetur illum repellat suscipit tempora vel, provident doloremque quam architecto consequuntur repellendus eaque eius expedita voluptas at dolores aliquid animi?</p>
            <h2 class="h2">Apakah CI Neews official</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit esse aliquid id! Iure suscipit impedit delectus doloremque adipisci rerum, error praesentium, repellat neque quaerat quia pariatur optio nobis voluptas dignissimos!</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($data_faqs as $faq):?>
                    <h2 class="h2"><?= $faq['question']?></h2>
                    <p><?= $faq['answer']?></p>
                <?php endforeach?>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
</body>
</html>