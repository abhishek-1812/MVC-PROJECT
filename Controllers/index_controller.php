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
 * Index Model
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."
 */
class IndexController
{
    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function sayWelcome()
    {
        return $this->model->welcomeMessage();
    }
}
?>