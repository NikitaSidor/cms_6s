<?php

namespace Admin\Controller;

use Engine\Core\Template\Theme;

class SettingController extends AdminController
{
    public function general()
    {
        $this->load->model('Setting');

        $this->data['settings']  = $this->model->setting->getSettings();
        $this->data['languages'] = languages();

        $this->view->render('setting/general', $this->data);
    }

    public function menus()
    {
        $this->load->model('Menu', false, 'Cms_6s');
        $this->load->model('MenuItem', false, 'Cms_6s');
        $this->data['menuId']   = empty($this->request->get['menu_id'])?null:$this->request->get['menu_id'];
        $this->data['menus']    = $this->model->menu->getList();
        $this->data['editMenu'] = $this->model->menuItem->getItems($this->data['menuId']);

        $this->view->render('setting/menus', $this->data);
    }

    public function ajaxMenuAdd()
    {
        $params = $this->request->post;

        $this->load->model('Menu', false, 'Cms_6s');

        if (isset($params['name']) && strlen($params['name']) > 0) {
            $addMenu = $this->model->menu->add($params);

            echo $addMenu;
        }
    }

    public function ajaxMenuAddItem()
    {
        $params = $this->request->post;

        $this->load->model('MenuItem', false, 'Cms_6s');

        if (isset($params['menu_id']) && strlen($params['menu_id']) > 0) {
            $id = $this->model->menuItem->add($params);

            $item['id']   = $id;
            $item['name'] = \Cms_6s\Model\MenuItem\MenuItemRepository::NEW_MENU_ITEM_NAME;
            $item['link'] = '#';
            Theme::block('setting/menu_item', [
                'item' => $item
            ]);
        }
    }

    public function ajaxMenuSortItems()
    {
        $params = $this->request->post;

        $this->load->model('MenuItem', false, 'Cms_6s');
        if (isset($params['data']) && !empty($params['data'])) {
            $sortItem = $this->model->menuItem->sort($params);
        }
    }
    public function ajaxMenuUpdateItem()
    {
        $params = $this->request->post;

        $this->load->model('MenuItem', false, 'Cms_6s');
        
        if (isset($params['item_id']) && strlen($params['item_id']) > 0) {
            $this->model->menuItem->update($params);
        }
    }
    public function ajaxMenuRemoveItem()
    {
        $params = $this->request->post;
        $this->load->model('MenuItem', false, 'Cms_6s');
        if (isset($params['item_id']) && strlen($params['item_id']) > 0) {
            $removeItem = $this->model->menuItem->remove($params['item_id']);

            return $removeItem;
        }
    }

    public function updateSetting()
    {
        $this->load->model('Setting');

        $params = $this->request->post;

        $this->model->setting->update($params);
    }
}