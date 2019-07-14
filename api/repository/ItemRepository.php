<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:31 PM
 */

require_once __DIR__ .'/../dto/Item.php';

interface ItemRepository
{
    public function addItem(Item $item):bool ;
    public function updateItem(Item $item): bool ;
    public function deleteItem(Item $iid):bool ;
    public function getAllItem():array ;
    public function setConnection(mysqli $connection);
}