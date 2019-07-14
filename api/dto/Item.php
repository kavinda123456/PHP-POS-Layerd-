<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:30 PM
 */

class Item
{
    private $iid;
    private $name;
    private $uprice;
    private $qty;

    /**
     * Item constructor.
     * @param $iid
     * @param $name
     * @param $uprice
     * @param $qty
     */
    public function __construct($iid, $name, $uprice, $qty)
    {
        $this->iid = $iid;
        $this->name = $name;
        $this->uprice = $uprice;
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * @param mixed $iid
     */
    public function setIid($iid)
    {
        $this->iid = $iid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUprice()
    {
        return $this->uprice;
    }

    /**
     * @param mixed $uprice
     */
    public function setUprice($uprice)
    {
        $this->uprice = $uprice;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }



}