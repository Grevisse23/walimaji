<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 2/17/18
 * Time: 4:14 PM
 */
require_once "../application/models/Users.php";

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $user = new Users();
        $this->view->user=$user->fetchAll()->toArray();
    }
}
