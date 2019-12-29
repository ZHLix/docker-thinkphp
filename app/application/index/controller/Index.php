<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo serialize('this is test');
    }
}
