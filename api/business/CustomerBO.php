<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:28 PM
 */

require_once __DIR__ ."/../dto/Customer.php";

interface CustomerBO
{
    public function addCustomer(Customer $customer):bool ;
    public function updateCustomer(Customer $customer): bool ;
    public function deleteCustomer(Customer $cid):bool ;
    public function getAllCustomer():array ;

}