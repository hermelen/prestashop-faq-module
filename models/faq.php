<?php
/**
 * Example from the CMS model (CMSCore)
 */
class FaqModel extends ObjectModel {
  public $id;
  public $username;
  public $question;

  public static $definition = [
    'table' => 'faq',
    'primary' => 'id',
    'fields' => array(
      'id' => [
        'type' => self::TYPE_INT
      ],
      'username' => [
        'type' => self::TYPE_STRING
      ],
      'question' => [
        'type' => self::TYPE_STRING
      ]
    )
  ];
  public function displayQuestions() {
    $sql = new DbQuery();
    $sql->select('*');
    $sql->from('faq', 'f');
    $sql->where('f.answer IS NOT NULL');
    // $sql->innerJoin('cms_lang', 'l', 'c.id_cms = l.id_cms AND l.id_lang = '.(int)$id_lang);
    // $sql->orderBy('position');
    return Db::getInstance()->executeS($sql);
  }
}
