<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:32 PM
 */
require_once __DIR__ ."/../../dto/Item.php";
require_once __DIR__ ."/../../db/DBConnection.php";
require_once __DIR__ ."/../../repository/ItemRepository.php";

class ItemRepositoryImpl implements ItemRepository
{
    private $connection;
    public function addItem(Item $item): bool
    {
        return($this->connection->query(
            "insert into item values ('{$item->getIid()}'
                                      '{$item->getName()}'
                                      '{$item->getUprice()}'
                                      '{$item->getQty()}')"
        )>0);
    }

    public function updateItem(Item $item): bool
    {
        return($this->connection->query(
            "update item set name='{$item->getName()}'
                             unitprice='{$item->getUprice()}'
                             qty='{$item->getQty()}' where iid='{$item->getIid()}'"
        )>0);
    }

    public function deleteItem(Item $iid): bool
    {
        return($this->connection->query(
            "delete from item where iid='{$iid->getIid()}'"
        )>0);
    }

    public function getAllItem(): array
    {
        $result=$this->connection->query(
            "select * from item"
        );
        return $result->fetch_all();
    }

    public function setConnection(mysqli $connection)
    {
        $this->connection->$connection;
    }
}