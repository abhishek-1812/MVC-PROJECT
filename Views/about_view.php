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
 * About Model
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."
 */
class AboutView
{

    private $modelObj;

    private $controller;


    function __construct($controller, $model)
    {
        $this->controller = $controller;

        $this->modelObj = $model;

        print "About - ";
    }

    public function now()
    {
        return $this->modelObj->nowADays();
    }

    public function today()
    {
        return $this->controller->current();
    }
}
?>