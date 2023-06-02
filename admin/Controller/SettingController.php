<?php 
namespace Admin\Controller;

class SettingController extends AdminController
{
    public function general()
    {
        $this->load->model('setting');

        $this->data['settings'] = $this->model->setting->getSettings();
        $this->data['languages'] =  \language();

        $this->view->render('settings/general', $this->data);
    }
    public function updateSetting()
    {
        $this->load->model('setting');

        $param = $this->request->post;
        $update = $this->model->setting->update($param);
    }
}