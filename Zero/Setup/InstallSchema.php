<?php
namespace Magestore\Zero\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
/**
 * Class InstallSchema
 * @package Magestore\Zero\Setup
 */

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface  $context)
    {
        $installer = $setup;
        $installer->startSetup();
        /**
         * Drop table if exists
         */
        $installer->getConnection()->dropTable($installer->getTable('film'));
        $installer->getConnection()->dropTable($installer->getTable('film_category'));
        $installer->getConnection()->dropTable($installer->getTable('film_actor'));
        $installer->getConnection()->dropTable($installer->getTable('category'));
        $installer->getConnection()->dropTable($installer->getTable('actor'));

        /**
         * Create Shape Table
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('film')
        )->addColumn(
            'film_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false,'identity'=>true,'primary'=>true],
            'film ID'
        )->addColumn(
            'title',Table::TYPE_TEXT,255,
            ['nullable'=>false],
            'film title'
        )->addColumn(
            'description',Table::TYPE_TEXT,null,
            ['nullable'=>false],
            'film description'
        )->addColumn(
            'language_id',Table::TYPE_SMALLINT,5,
            ['nullable'=>false],
            'film language_id'
        )->addColumn(
            'original_language_id',Table::TYPE_SMALLINT,5,
            ['nullable'=>true],
            'film original_id'
        )->addColumn(
            'rental_duration',Table::TYPE_SMALLINT,5,
            ['nullable'=>false],
            'film rental_duration'
        )->addColumn(
            'rental_rate',Table::TYPE_INTEGER,4,
            ['nullable'=>false],
            'film rental_rate'
        )->addColumn(
            'length',Table::TYPE_SMALLINT,5,
            ['nullable'=>true],
            'film length'
        )->addColumn(
            'replacement_cost',Table::TYPE_INTEGER,5,
            ['nullable'=>false],
            'film replacement_cost'
        )->addColumn(
            'created_at',Table::TYPE_TIMESTAMP,null,
            ['nullable'=>false],
            'film created_at'
        )->addColumn(
            'updated_at',Table::TYPE_TIMESTAMP,null,
            ['nullable'=>false],
            'film updated_at'
        );
        /**
         * Create Table
         */
        $installer->getConnection()->createTable($table);
        /**
         * Create Shape Table
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('category')
        )->addColumn(
            'category_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false,'identity'=>true,'primary'=>true],
            'category ID'
        )->addColumn(
            'name',Table::TYPE_TEXT,255,
            ['nullable'=>false],
            'category name'
        )->addColumn(
            'created_at',Table::TYPE_TIMESTAMP,null,
            ['nullable'=>false],
            'category created_at'
        )->addColumn(
            'updated_at',Table::TYPE_TIMESTAMP,null,
            ['nullable'=>false],
            'category updated_at'
        );
        $installer->getConnection()->createTable($table);
        // Create Table
        $table = $installer->getConnection()->newTable(
            $installer->getTable('film_category')
        )->addColumn(
            'film_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false],
            'film_id'
        )->addColumn(
            'category_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false],
            'category_id'
        )->addForeignKey(
            $installer->getFkName(
                'film_category',
                'film_id',
                'film',
                'film_id'
            ),
            'film_id',
            $installer->getTable('film'),
            'film_id',
            Table::ACTION_CASCADE
        )->addForeignKey(
            $installer->getFkName(
                'film_category',
                'category_id',
                'category',
                'category_id'
            ),
            'category_id',
            $installer->getTable('category'),
            'category_id',
            Table::ACTION_CASCADE
        );
        $installer->getConnection()->createTable($table);
        //Create Table
        $table = $installer->getConnection()->newTable(
            $installer->getTable('actor')
        )->addColumn(
            'actor_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false,'identity'=>true,'primary'=>true],
            'actor ID'
        )->addColumn(
            'first_name',Table::TYPE_TEXT,255,
            ['nullable'=>false],
            'actor first_name'
        )->addColumn(
            'last_name',Table::TYPE_TEXT,255,
            ['nullable'=>false],
            'actor last_name'
        )->addColumn(
            'created_at',Table::TYPE_TIMESTAMP,null,
            ['nullable'=>false],
            'actor created_at'
        )->addColumn(
            'updated_at',Table::TYPE_TIMESTAMP,null,
            ['nullable'=>false],
            'actor updated_at'
        );
        $installer->getConnection()->createTable($table);
        //Create Table
        $table = $installer->getConnection()->newTable(
            $installer->getTable('film_actor')
        )->addColumn(
            'actor_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false],
            'actor_id'
        )->addColumn(
            'film_id',Table::TYPE_INTEGER,10,
            ['nullable'=>false],
            'film_id'
        )->addForeignKey(
            $installer->getFkName(
                'film_actor',
                'actor_id',
                'actor',
                'actor_id'
            ),
            'actor_id',
            $installer->getTable('actor'),
            'actor_id',
            Table::ACTION_CASCADE
        )->addForeignKey(
            $installer->getFkName(
                'film_actor',
                'film_id',
                'film',
                'film_id'
            ),
            'film_id',
            $installer->getTable('film'),
            'film_id',
            Table::ACTION_CASCADE
        );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();

    }
}