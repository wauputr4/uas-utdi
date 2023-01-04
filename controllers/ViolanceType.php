<?php namespace ppipm\pci\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ViolanceType extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'superadmin' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ppipm.pci', 'main-menu-item', 'side-menu-item');
    }
}
