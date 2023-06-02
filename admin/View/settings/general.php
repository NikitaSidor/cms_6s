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
            <form id="settingForm">
                <? foreach ($settings as $setting): ?>
                    <? if ($setting['key_field'] == 'language'): ?>
                        <div class="form-group row">
                            <label for="language" class="col-sm-2 col-form-label"><?= $setting['name'] ?></label>
                            <div class="col-sm-10">
                                <select class="form-control" id="language" name="<?= $setting['key_field'] ?>">
                                    <? foreach($languages as $language): ?>
                                        <option value="<?=$language->info->key?>">
                                            <?=$language->info->title?>
                                        </option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <? else: ?>
                        <div class="form-group row">
                            <label for="siteName" class="col-sm-2 col-form-label"><?= $setting['name'] ?></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="siteName" name="<?= $setting['key_field'] ?>" value="<?= $setting['value'] ?>">
                            </div>
                        </div>
                    <?endif;?>
                <? endforeach; ?>
                
            </form>
                <button type="submit" class="btn btn-primary" onclick="setting.update()">
                    Обновить
                </button>
        </div>
    </main>

<?php $this->theme->footer(); ?>