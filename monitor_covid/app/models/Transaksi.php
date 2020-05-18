<?php

class Transaksi extends \Phalcon\Mvc\Model
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
    public $user_id;

    /**
     *
     * @var string
     */
    public $tgl_transaksi;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("monitor_covid");
        $this->setSource("transaksi");
        $this->hasMany('id', 'Bantuan', 'transaksi_id', ['alias' => 'Bantuan']);
        $this->belongsTo('user_id', '\User', 'id', ['alias' => 'User']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Transaksi[]|Transaksi|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Transaksi|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
