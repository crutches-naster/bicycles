<?php

class Contact {

    private string $name, $surname, $email, $phone, $address;

    public function name($name) : static
    {
        $this->name = $name;
        return $this;
    }

    public function surname($surname) : static
    {
        $this->surname = $surname;
        return $this;
    }

    public function email($email) : static
    {
        $this->email = $email;
        return $this;
    }

    public function phone($phone) : static
    {
        $this->phone = $phone;
        return $this;
    }

    public function address($address) : static
    {
        $this->address = $address;
        return $this;
    }

    public function build() : static
    {
        return $this;
    }
}
