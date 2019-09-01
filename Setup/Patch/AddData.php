<?php

namespace BDC\Declarative\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\ModuleDataSetupInterface;
/**
 * Class AddData
 * @package BDC\Declarative\Setup\Patch\Data
 */

class AddData implements DataPatchInterface, PatchVersionInterface {
/**
* @var BDC\Declarative\Model\Author
*/
private $author;
/**
*
* @param BDC\Declarative\Model\Author $author
*/
public function __construct(
     \BDC\Declarative\Model\Author $author) {
     $this->author = $author;
}
/**
* {@inheritdoc}
* @SuppressWarnings(PHPMD.ExcessiveMethodLength)
*/
public function apply(){
    $authorData = [];
    $authorData['name'] = "Abdul Matin";
    $authorData['email'] = "matinict@gmail.com";
    $authorData['company'] = "BDCrops Inc.";
    $authorData['age'] = 32;
    $this->author->addData($authorData);
    $this->author->getResource()->save($this->author);
}
/**
* {@inheritdoc}
*/
public static function getDependencies(){
     return [];
}
/**
* {@inheritdoc}
*/
public static function getVersion(){
     return '2.0.0';
}
/**
* {@inheritdoc}
*/
public function getAliases(){
     return [];
  }

}
