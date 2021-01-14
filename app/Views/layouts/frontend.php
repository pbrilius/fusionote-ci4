<!doctype html>
<html>
    <meta>
        <meta property="og:url"                content="<?= $url ?>" />
        <meta property="og:type"               content="<?= $type ?>" />
        <meta property="og:title"              content="<?= $title ?>" />
        <meta property="og:description"        content="<?= $title . ' - ' . $metaTitle ?>" />
        <meta property="og:image"              content="<?= $image ?>" />
    </meta>
    <head>
        <title><?= $title ?>&nbsp;&#x0005F;&nbsp;<?= $metaTitle ?></title>
    </head>
    <body>
        <?= $this->include('topbar') ?>
        <?= $this->renderSection('content') ?>
    </body>
</html>