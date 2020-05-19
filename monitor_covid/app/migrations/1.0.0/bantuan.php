<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class BantuanMigration_100
 */
class BantuanMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('bantuan', [
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
                        'kategori_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'transaksi_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'kategori_id'
                        ]
                    ),
                    new Column(
                        'nama',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'transaksi_id'
                        ]
                    ),
                    new Column(
                        'jumlah',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 15,
                            'scale' => 3,
                            'after' => 'nama'
                        ]
                    ),
                    new Column(
                        'satuan',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'jumlah'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('fk_bantuan_transaksi', ['transaksi_id'], ''),
                    new Index('fk_bantuan_kategori', ['kategori_id'], '')
                ],
                'references' => [
                    new Reference(
                        'fk_bantuan_kategori',
                        [
                            'referencedTable' => 'kategori',
                            'referencedSchema' => 'monitor_covid',
                            'columns' => ['kategori_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => 'RESTRICT',
                            'onDelete' => 'RESTRICT'
                        ]
                    ),
                    new Reference(
                        'fk_bantuan_transaksi',
                        [
                            'referencedTable' => 'transaksi',
                            'referencedSchema' => 'monitor_covid',
                            'columns' => ['transaksi_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => 'RESTRICT',
                            'onDelete' => 'RESTRICT'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '15',
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
