<?php

namespace App;


class Router
{
    public $pathList = [];

    public function add($type, $path, $callBack, $params = False)
    {
        $paramsIsset = False;
        if ((strpos($path, '{}') ? True : False) or $params != False) {
            $paramsIsset = True;
        }
        $this->pathList[] = [
            'path' => $path,
            'type' => $type,
            'callback' => $callBack,
            'params' => $params,
            'params_isset' => $paramsIsset
        ];
    }



    public function start()
    {
        $type = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['SCRIPT_URL'] ?? '/';
        $pathParam = $this->getPathParam($path);
        if ($pathParam != False) {
            $path = str_replace($pathParam, '{}', $path);
        }
        $result = array_filter($this->pathList, function ($k) use ($path, $type) {
            return $k['path'] === $path and $k['type'] === $type;
        });
        if (!empty($result)) {
            $result = array_values($result)[0];
            $params =  $result['params'] != False ? $result['params'] : $pathParam;
            call_user_func($result['callback'], $params);
        } else {
            call_user_func('App\View\View::render', '404');
        }
    }



    private function getPathParam($path)
    {
        $result = preg_match('/\\d+/', $path, $found);
        if ($result > 0) {
            return $found[0];
        }
        return false;
    }
}
