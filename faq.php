<?php
if (!defined('_PS_VERSION_'))
{
  exit;
}


class Faq extends Module
{
  public function __construct()
  {
    $this->name = 'faq'; // MUST be the name of the module’s folder
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'Hermelen Peris';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('FAQ');
    $this->description = $this->l('Foire aux questions');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('FAQ_NAME'))// NOMDUMODULE_NAME
      $this->warning = $this->l('No name provided');
  }

  // public function install()
  // {
  //   if (Shop::isFeatureActive())
  //     Shop::setContext(Shop::CONTEXT_ALL);
  //
  //   if (!parent::install() ||
  //     !$this->registerHook('leftColumn') ||
  //     !$this->registerHook('header') ||
  //     !Configuration::updateValue('FAQ_NAME', 'my friend')
  //   )
  //     return false;
  //
  //   return true;
  // }

  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    return parent::install() &&
      // $this->registerHook('leftColumn') &&
      $this->registerHook('displayFooter') &&
      Configuration::updateValue('FAQ_NAME', 'my friend');
  }


  public function hookDisplayHeader() // appelé dans la balise head ou on link le css habituellement
  {
    $this->context->controller->addCSS($this->_path.'css/faq.css', 'all');
  }


  public function hookDisplayFooter($params)
  {
    $this->context->smarty->assign(
        array(
            'faq_name' => Configuration::get('FAQ_NAME'),
            'faq_link' => $this->context->link->getModuleLink('faq', 'display')
        )
    );
    return $this->display(__FILE__, 'faq.tpl');// correspond au fichier /views/templates/hook/faq.tpl
  }



  public function uninstall()
  {
    if (!parent::uninstall() ||
      !Configuration::deleteByName('FAQ_NAME')
    )
      return false;

    return true;
  }
}
