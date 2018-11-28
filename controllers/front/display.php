<?php
class faqdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    if (Tools::isSubmit('submit_faq'))//verif si submit
    {
      $username = strval(Tools::getValue('username'));
      $question = strval(Tools::getValue('question'));

      $faq = new FaqModel;
      $faq->username = $username;
      $faq->question = $question;
      $faq->add();
    }
    $this->setTemplate('module:faq/views/templates/front/display.tpl');
  }
}
