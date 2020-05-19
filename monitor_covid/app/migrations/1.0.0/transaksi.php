<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class TransaksiMigration_100
 */
class TransaksiMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('transaksi', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'user_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => false,
                            'size' => 11,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'tgl_transaksi',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'notNull' => true,
                            'after' => 'user_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('fk_transaksi_user', ['user_id'], '')
                ],
                'references' => [
                    new Reference(
                        'fk_transaksi_user',
                        [
                            'referencedTable' => 'user',
                            'referencedSchema' => 'monitor_covid',
                            'columns' => ['user_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => 'CASCADE',
                            'onDelete' => 'SET NULL'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '10',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_general_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
