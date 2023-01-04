<?php namespace ppipm\pci\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Lapor extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'superadmin', 
        'fasil' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ppipm.pci', 'main-menu-item2', 'side-menu-item');
    }
}
