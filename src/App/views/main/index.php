<h1>Главная страница</h1>

<hr>

<div class="posts-list">
<?php foreach ($news as $post): ?>
    <div class="post" style="border: 1px solid red">
        <h2 class="title"><?=$post['title']?></h2>
        <p class="text"><?=$post['text']?></p>
    </div>
<?php endforeach; ?>
</div>