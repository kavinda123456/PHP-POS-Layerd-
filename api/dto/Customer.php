<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:30 PM
 */

class Customer
{
    private $cid;
    private $name;
    private $address;
    private $climit;

    /**
     * Customer constructor.
     * @param $cid
     * @param $name
     * @param $address
     * @param $climit
     */
    public function __construct($cid, $name, $address, $climit)
    {
        $this->cid = $cid;
        $this->name = $name;
        $this->address = $address;
        $this->climit = $climit;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getClimit()
    {
        return $this->climit;
    }

    /**
     * @param mixed $climit
     */
    public function setClimit($climit)
    {
        $this->climit = $climit;
    }



}