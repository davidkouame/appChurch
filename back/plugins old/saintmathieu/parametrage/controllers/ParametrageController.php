<?php namespace saintmathieu\Parametrage\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ParametrageController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];

    // public $implement = [    ];

    public $listConfig = 'config_list.yaml';
    
    public function __construct()
    {
        parent::__construct();
    }
}
