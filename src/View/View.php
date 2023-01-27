<?php

namespace App\View;

use App\Config;

class View
{
    
    /**
     * @param string $template
     * @param array $data
     * 
     */
    public static function render(string $template,array $data = []){

        $smarty = new \Smarty();
        $smarty->setTemplateDir('../src/View/template');
        $smarty->setConfigDir('../src/View/config');
        $smarty->setCompileDir('../src/View/compile');
        $smarty->setCacheDir('../src/View/cache');
        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }
        
        $smarty->display("pages/{$template}.tpl");
    }
}