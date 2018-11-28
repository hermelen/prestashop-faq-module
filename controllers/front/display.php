<?php
class faqdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:faq/views/templates/front/display.tpl');
  }
}
