<?php namespace saintmathieu\Paroisse;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return ['SaintMathieu\Paroisse\Components\AjouterParoissien' => 'ajouterParoissien'];
    }

    public function registerSettings()
    {
    }
}
