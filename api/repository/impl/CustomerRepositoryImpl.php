<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:32 PM
 */

require_once __DIR__ ."/../../dto/Customer.php";
require_once __DIR__ ."/../../db/DBConnection.php";
require_once __DIR__ ."/../../repository/CustomerRepository.php";
class CustomerRepositoryImpl implements CustomerRepository
{
    private $connection;

    public function addCustomer(Customer $customer): bool
    {
        return($this->connection->query(
            "insert into customer values ('{$customer->getCid()}'
                                          '{$customer->getName()}'
                                          '{$customer->getAddress()}'
                                          '{$customer->getClimit()}')"
        )>0);
    }

    public function updateCustomer(Customer $customer): bool
    {
        return($this->connection->query(
            "update customer set name ='{$customer->getName()}',
                                 address='{$customer->getAddress()}',
                                 climit='{$customer->getClimit()}' where cid='{$customer->getCid()}'"
        )>0);
    }

    public function deleteCustomer(Customer $cid): bool
    {
        return($this->connection->query(
            "delete from customer where cid='{$cid->getCid()}'"
        )>0);
    }

    public function getAllCustomer(): array
    {
        $result=$this->connection->query(
            "select * from customer"
        );
        return $result->fetch_all();
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }
}