<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Создать пост</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPage">
                        <div class="form-group">
                            <label for="formTitle">Загаловок</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Загаловок страницы...">
                        </div>
                        <div class="form-group">
                            <label for="formContent">Контент</label>
                            <textarea name="content" id="redactor" class="form-control" id="formContent"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Настройка публикации</p>
                        <button type="submit" class="btn btn-primary" onclick="page.add()">
                            Опубликовать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>