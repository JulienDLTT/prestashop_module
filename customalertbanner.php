<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class customalertbanner extends Module
{

    public function __construct()
    {
        $this->name = 'customalertbanner';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Julien DELATTRE';
        $this->need_instance = 0;
        $this->message = 'Message d alerte';
        $this->url = 'https://www.backmarket.fr/fr-fr/p/playstation-4-slim-500go-noir/5e9e7df4-33d4-4bf4-b4dc-c78b76b640e6#l=12';
        $this->label = 'lien';

        parent::__construct();

        $this->displayName = $this->l('Alerte personnalisée en bannière');
        $this->description = $this->l('Affiche une alerte personnalisée en bannière en haut de la page.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('header');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    
    
    public function hookHeader()
    {

        $this->context->smarty->assign('MESSAGE', $this->message);
        $this->context->smarty->assign('URL_DU_LIEN', $this->url);
        $this->context->smarty->assign('LABEL', $this->label);        
        $this->context->controller->addJS($this->_path . 'views/js/customalertbanner.js');

        return $this->display(__FILE__, 'views/templates/hook/alertbanniere.tpl');
    }

}
