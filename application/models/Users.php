<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 2/17/18
 * Time: 5:36 PM
 */


require_once "Zend/Db/Table/Abstract.php";

class Users extends Zend_Db_Table_Abstract
{

    protected $_name = "users";
}
