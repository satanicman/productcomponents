<?php

if (!defined('_PS_VERSION_'))
    exit;

class ProductComponents extends Module

{
    public function __construct()
    {
        $this->name = 'productcomponents';
        $this->tab = 'other';
        $this->version = '0.1';
        $this->author = 'skype: not_a_free_man';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Product Components');
        $this->description = $this->l('Components fore products');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MUMODULE_NAME'))
            $this->warning = $this->l('No name provided');
    }

    public function install()
    {
        if (!parent::install())
            return false;

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall())
            return false;

        return true;

    }
}