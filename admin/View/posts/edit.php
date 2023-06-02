<?php $this->theme->header(); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col post-title">
                    <h3><?= $post['title'] ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPost">
                        <input id="formPostId" type="hidden" name="post_id" value="<?= $post['id'] ?>">
                        <div class="form-group">
                            <label for="formTitle">Загаловок</label>
                            <input type="text" name="title" class="form-control" id="formTitle" value="<?= $post['title'] ?>" placeholder="Загаловок страницы...">
                        </div>
                        <div class="form-group">
                            <label for="formContent">Контент</label>
                            <textarea name="content" id="redactor" class="form-control" id="formContent"><?= $post['content'] ?></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Обновить страницу</p>
                        <button type="submit" class="btn btn-primary" onclick="post.update()">
                            Обновить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>