<?php
/**
 * Short description for code
 * php version 7.2.10
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."
 */
/**
 * Index View
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."
 */
class IndexView
{

    private $model;

    private $controller;


    function __construct($controller, $model)
    {
        $this->controller = $controller;

        $this->model = $model;

        print "Home - ";
    }

    public function index()
    {
        return $this->controller->sayWelcome();
    }

    public function action()
    {
        return $this->controller->takeAction();
    }
}
?>