<?php
require_once 'User.php';
require_once 'Client.php';
require_once 'Admin.php';

// Tworzenie obiektow
$user = new User('John', 'Doe', 'johndoe');

$client = new Client('Jane', 'Smith', 'janesmith');
$client->setLocation('New York', 'NY', 'USA');

$admin = new Admin('Admin', 'Adminowski', 'admin');


// Wydrukowanie pelnej nazwy i wartosci is_admin dla kazdego obiektu
echo "User: ";
$user->displayFullName();
echo "; is_admin: " . ($user->isAdmin() ? 'yes' : 'no') . "\n";

echo "Client: ";
$client->displayFullName();
echo "; is_admin: " . ($client->isAdmin() ? 'yes' : 'no') . "; Location: {$client->getLocation()}\n";

echo "Admin: ";
$admin->displayFullName();
echo "; is_admin: " . ($admin->isAdmin() ? 'yes' : 'no') . "\n";
?>
