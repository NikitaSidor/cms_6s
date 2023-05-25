<?php 
namespace Cms_6s\Controller;

class HomeController extends CmsController
{
    public function index() {
        $this->view->render('index');
    }
    public function news($id) {
        echo "news page";
        print_r($id);
    }
}
?>