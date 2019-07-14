<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 7/13/2019
 * Time: 11:29 PM
 */

class CustomerBOImpl implements CustomerBO
{
    private $customerRepository;

    /**
     * CustomerBOImpl constructor.
     */
    public function __construct()
    {
        $this->customerRepository=new CustomerRepositoryImpl();
    }


    public function addCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->addCustomer($customer);
    }

    public function updateCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->updateCustomer($customer);
    }

    public function deleteCustomer(Customer $cid): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->deleteCustomer($cid);
    }

    public function getAllCustomer(): array
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->getAllCustomer();
    }

}