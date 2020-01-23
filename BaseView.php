<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\View;

use Exception;

abstract class BaseView
{

    use RenderFileTrait;

    public function __construct()
    {
    }

}