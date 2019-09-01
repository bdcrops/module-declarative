<?php
declare(strict_types=1);
namespace BDC\Declarative\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
/**
 * Class NonRevertable
 * @package BDC\Declarative\Setup\Patch\Data
 */
class NonRevertable implements DataPatchInterface{
    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;
    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup){
        $this->moduleDataSetup = $moduleDataSetup;
    }
    /**
     * Do Upgrade
     * @return void
     */
    public function apply(){
        $data = ['name' => 'Matin Rahman', 'email' => 'matinict@gmail.com','note' => 'Declarative insert'];
        $this->moduleDataSetup->getConnection()->insert('bdc_declarative', $data);
    }
    /**
     * {@inheritdoc}
     */
    public function getAliases(){
        return [];
    }
    /**
     * {@inheritdoc}
     */
    public static function getDependencies(){
        return [];
    }
}
