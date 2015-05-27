<?php
namespace Core;

class Template
{
    private $_smarty;

    public function __construct()
    {
        $this->_smarty = new \Smarty();

        $this->_smarty->setTemplateDir('app/templates');
        $this->_smarty->setCompileDir('app/Cache/templates_compiled');
        $this->_smarty->setCacheDir('app/Cache/templates_cached');
        $this->_smarty->setConfigDir('app/Config');
    }

    public function assign($templateVar, $value)
    {
        $this->_smarty->assign($templateVar, $value);
    }

    public function render($template)
    {
        $this->_smarty->display($template);
    }
}