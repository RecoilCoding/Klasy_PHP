<?php
class User {
    public string $name;
    public string $surname;
    public string $username;
    protected bool $is_admin = false;

    public function __construct(string $name, string $surname, string $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Metoda sprawdzajaca czy uzytkownik jest administratorem
    public function isAdmin() : bool {
        return $this->is_admin;
    }

    // Metoda wypisujaca pelne imie i nazwisko
    public function displayFullName() : void {
        echo $this->name . ' ' . $this->surname;
        if ($this->is_admin) {
            echo ' (admin)';
        }
    }
}
?>
