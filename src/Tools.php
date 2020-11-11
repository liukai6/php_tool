<?php


namespace php_tool;


class Tools
{
    public function json($data = array())
    {
        header("Content-type:application/json");
        echo json_encode($data);
        exit;
    }
}