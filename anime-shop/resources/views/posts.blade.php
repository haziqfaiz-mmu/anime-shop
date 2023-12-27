<!doctype html>

<title>Anime Shop</title>
<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>

<body>
    <?php foreach ($posts as $post): ?>
        <article>
            <?=$post; ?>
        </article>
    <?php endforeach;?>

</body>
