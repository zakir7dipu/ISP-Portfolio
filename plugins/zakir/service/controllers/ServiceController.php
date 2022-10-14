<?php namespace Zakir\Service\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ServiceController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'service_access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zakir.Service', 'service_access');
    }
}
