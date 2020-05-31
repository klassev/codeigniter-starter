<?php namespace Modules\Blog\Config;
use CodeIgniter\Config\BaseConfig;

class Blog extends BaseConfig
{
    public $blogName  = 'My Great Blog';
    public $adminEmail = 'webmaster@example.com';

    public function testConfig()
    {
        echo __CLASS__ . '<br>';
    }
}