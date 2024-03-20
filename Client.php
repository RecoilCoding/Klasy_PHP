<?php
require_once 'User.php';

class Client extends User {
    private string $city;
    private string $state;
    private string $country;

    public function __construct(string $name, string $surname, string $username) {
        parent::__construct($name, $surname, $username);
    }

    // Getter i setter dla city
    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function getCity() : string{
        return $this->city;
    }

    // Getter i setter dla state
    public function setState(string $state): void {
        $this->state = $state;
    }

    public function getState() : string {
        return $this->state;
    }

    // Getter i setter dla country
    public function setCountry(string $country): void {
        $this->country = $country;
    }

    public function getCountry() : string{
        return $this->country;
    }

    // Getter i setter dla lokalizacji
    public function setLocation(string $city, string  $state, string $country): void {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function getLocation() : string {
        return $this->city . ', ' . $this->state . ', ' . $this->country;
    }
}
?>
