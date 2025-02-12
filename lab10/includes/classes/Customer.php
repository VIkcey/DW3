<?php
class Customer
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public array $accounts;


    public function __construc($first_name, $last_name, $email, $accounts )
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->accounts = $accounts;
    }


    


}

















