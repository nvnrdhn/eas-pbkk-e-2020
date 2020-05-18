<?php

class Bantuan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $kategori_id;

    /**
     *
     * @var integer
     */
    public $transaksi_id;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var double
     */
    public $jumlah;

    /**
     *
     * @var string
     */
    public $satuan;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("monitor_covid");
        $this->setSource("bantuan");
        $this->belongsTo('kategori_id', '\Kategori', 'id', ['alias' => 'Kategori']);
        $this->belongsTo('transaksi_id', '\Transaksi', 'id', ['alias' => 'Transaksi']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bantuan[]|Bantuan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bantuan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
