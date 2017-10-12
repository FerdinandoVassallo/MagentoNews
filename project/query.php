<?php

require_once('app/Mage.php');
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors',1);
umask(0);
Mage::app();

////create a category
//$category=Mage::getModel('vassallo_news/category');
//$category->setCode('top');
//$category->setName('Think Open');
//$category->setStatus(1);
//$category->save();

// load category
$category= Mage::getModel('vassallo_news_category')->load(1);
//Zend_Debug::dump($category);

// create a story
$story=Mage::getModel('vassallo_news/story');
$story->setTitle('La mia storia');
$story->setContent('Lorem Ipsium');
$story->setStatus(1);
$story->setCategory($category);
$story->save();

$story=Mage::getModel('vassallo_news/story')->load(1);

Zend_Debug::dump($story);
Zend_Debug::dump($story->getCategory());
