<?php
class faqdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    $faq = new FaqModel;
    parent::initContent();
    if (Tools::isSubmit('submit_faq'))//verif si submit
    {
      $username = strval(Tools::getValue('username'));
      $question = strval(Tools::getValue('question'));

      $faq->username = $username;
      $faq->question = $question;
      $faq->add();
    }

    $questions = $faq->displayQuestions();

    $this->context->smarty->assign('faqs', $questions);

    $this->setTemplate('module:faq/views/templates/front/display.tpl');
  }
}
