<?php namespace Zakir\Faq\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class FaqController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'faq_access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zakir.Faq', 'main-menu-item');
    }
}
