<?php
namespace Core;

class Template
{
    private $_smarty;

    public function __construct()
    {
        $this->_smarty = new \Smarty();

        $this->_smarty->setTemplateDir(APP . DIRECTORY_SEPARATOR . TEMPLATE_PATH);
        $this->_smarty->setCompileDir(APP . '/Cache/templates_compiled');
        $this->_smarty->setCacheDir(APP . '/Cache/templates_cached');
        $this->_smarty->setConfigDir(APP . '/Config');

        $this->addPluginDir(APP . '/Modules/Smarty');
    }

    public function assign($templateVar, $value)
    {
        $this->_smarty->assign($templateVar, $value);
    }

    public function render($template)
    {
        $this->_smarty->display($template);
    }

    private function addPluginDir($directory)
    {
        $this->_smarty->addPluginsDir($directory);
    }
}