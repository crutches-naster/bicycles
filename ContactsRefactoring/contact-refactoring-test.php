<?php

require_once "Contact.php";

$contact = new Contact();
$newContact = $contact->phone('000-555-000')
    ->name("John")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some address")
    ->build();

echo print_r($newContact, true);


$secondContact =  $contact->phone('444-555-222')
    ->name("Name")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some new address")
    ->build();

echo print_r($secondContact, true);
