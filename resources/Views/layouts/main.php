<!DOCTYPE html>
<html lang="<?= config('language') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title><?= config('name') . (isset($title) && $title ? ' | ' . $title : '') ?></title>
    <meta name="keywords" content="<?= config('keywords') ?>">
    <meta property="og:url" content="<?= config('property_url') ?>">
    <meta property="og:type" content="<?= config('property_type') ?>">
    <meta property="og:title" content="<?= config('property_title') ?>">
    <meta property="og:description" content="<?= config('property_description') ?>">
    <meta name="description" content="<?= $description ?? config('description') ?>">
    <meta name="author" content="<?= implode(', ', array_column(config('authors'), 'fullname')) ?>">

    <link rel="stylesheet" href="<?= assets('app.css') ?>">

    <?php if (!empty($css)) : ?>
        <?php foreach ($css as $stylesheet) : ?>
            <link href="<?= media_css($stylesheet) ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body class="font-inter">
    <?php include layout('partials.header'); ?>
    <main class="">
        <?= $content ?? '' ?>
    </main>
    <?php include layout('partials.footer'); ?>

    <?php if (!empty($js)) : ?>
        <?php foreach ($js as $script) : ?>
            <script src="<?= media_js($script) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    <script src="<?= media_js('main.js') ?>" type="module"></script>
</html>