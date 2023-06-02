<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>
                        <?= $lang->menu['posts'] ?>
                        <a href="/admin/pages/create/">Create page</a>
                    </h3>
                </div>
            </div>
            
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Загаовок</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post): ?>
                <tr>
                    <th scope="row"><?= $post['id'] ?></th>
                    <td><a href="/admin/posts/edit/<?= $post['id'] ?>"><?= $post['title'] ?></a></td>
                    <td><?= $post['date_create'] ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

<?php $this->theme->footer(); ?>