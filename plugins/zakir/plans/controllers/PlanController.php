<?php namespace Zakir\Plans\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PlanController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'plan_access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zakir.Plans', 'main-menu-item');
    }
}
