<?php namespace Zakir\Request\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class RequestController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zakir.Request', 'main-menu-item');
    }
}
