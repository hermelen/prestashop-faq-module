<?php
$sql = "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."faq` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(100) NOT NULL ,
  `question` TEXT NOT NULL ,
  PRIMARY KEY (`id`)
  )";
