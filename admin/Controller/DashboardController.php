<?php 
namespace Admin\Controller;

class DashboardController extends AdminController
{
    public function index() 
    {
        // Load model, language
        $this->load->model('User');
        // Vars
        $this->load->language('dashboard/main');
        // Render this template
        $this->view->render('dashboard', $this->data);
    }
}
?>