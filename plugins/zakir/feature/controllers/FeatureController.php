<?php namespace Zakir\Feature\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class FeatureController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'feature_access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zakir.Feature', 'main-menu-item');
    }
}
