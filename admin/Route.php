<?php 
/* 
* LOGIN 
* GET 
*/
$this->router->add('login', '/admin/login/', 'LoginController:form'); 
$this->router->add('logout', '/admin/logout/', 'AdminController:logout'); 
// POST
$this->router->add('auth-admin', '/admin/auth/', 'LoginController:authAdmin', 'POST'); 

/* 
* DASHBOARD 
* GET 
*/
$this->router->add('dashboard', '/admin/', 'DashboardController:index'); 

/* 
* PAGES 
* GET 
*/
$this->router->add('pages', '/admin/pages/', 'PageController:listing'); 
$this->router->add('page-create', '/admin/pages/create/', 'PageController:create'); 
$this->router->add('page-edit', '/admin/pages/edit/(id:int)', 'PageController:edit');
// POST
$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST'); 
$this->router->add('page-update', '/admin/page/update/', 'PageController:update', 'POST');

/* 
* POSTS 
* GET 
*/
$this->router->add('posts', '/admin/posts/', 'PostController:listing'); 
$this->router->add('post-create', '/admin/posts/create/', 'PostController:create'); 
$this->router->add('post-edit', '/admin/posts/edit/(id:int)', 'PostController:edit');
// POST
$this->router->add('post-add', '/admin/post/add/', 'PostController:add', 'POST'); 
$this->router->add('post-update', '/admin/post/update/', 'PostController:update', 'POST'); 

/* 
* POSTS 
* GET 
*/
$this->router->add('setting-general', '/admin/settings/general/', 'SettingController:general'); 
?>