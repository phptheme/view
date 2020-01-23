<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\View;

trait RenderFileTrait
{

    public function renderFile(string $filename, array $params = []) : string
    {
        extract($params);

        ob_start();

        require($filename);

        $return = ob_get_contents();

        ob_end_clean();

        return $return;
    }

}