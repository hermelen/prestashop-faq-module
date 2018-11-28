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
}
