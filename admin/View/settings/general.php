<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>
                        <?= $lang->menu['settings'] ?>
                    </h3>
                </div>
            </div>
            <form>
                <? foreach ($settings as $setting): ?>
                <div class="form-group row">
                    <label for="siteName" class="col-sm-2 col-form-label"><?= $setting['name'] ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="siteName" name="<?= $setting['key_field'] ?>" value="<?= $setting['value'] ?>">
                    </div>
                </div>
                <?//print_r($setting)?>
                <? endforeach; ?>
                <div class="form-group row">
                    <label for="language" class="col-sm-2 col-form-label">Язык</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="language">
                        <option>Русский</option>
                        <option>Английский</option>
                        <option>Французский</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php $this->theme->footer(); ?>