<?php
namespace Modules\Blog\Controllers;
use \CodeIgniter\Controller;

class Blog extends Controller
{
    public function index()
    {
        // test config
        $config = new \Modules\Blog\Config\Blog();
        echo $config->testConfig();
        // test controller
        echo __CLASS__ . '<br>';
        // test model
        $model = new \Modules\Blog\Models\Blog();
        $model->testBlogModelClass();
    }
}