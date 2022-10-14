<?php namespace Zakir\Contact\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ContactController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zakir.Contact', 'main-menu-item');
    }
}
