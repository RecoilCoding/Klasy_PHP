# Klasy_PHP
Utwórz 3 klasy

User

Powinien mieć 3 publiczne właściwości: $name , $surname i $username;
Ustaw ich wartości za pomocą metody konstruktora;
Dodaj 1 chronioną właściwość $is_admin. Jego domyślna wartość powinna być false;
Utwórz metodę sprawdzającą, czy użytkownik jest administratorem;
Utwórz metodę, która wypisuje pełne imię i nazwisko użytkownika. 
Jeśli użytkownik jest administratorem, na końcu napisz (admin).

Client 

Powinien rozszerzyć klasę User;
Dodaj 3 prywatne nieruchomości: $city, $state, $country;
Konstruktor klasy Client powinien mieć takie same parametry jak konstruktor nadrzędny;
Dla pozostałych właściwości utwórz metody ustawiające i pobierające;
Utwórz metodę location(), która zwraca „$city, $state, $country”.

Admin

Powinien rozszerzyć klasę User;
Konstruktor powinien mieć te same parametry co konstruktor nadrzędny;
Konstruktor powinien ustawić wartość właściwości $is_admin na true.


Utwórz obiekty z każdej klasy.

Wydrukuj pełną nazwę i wartości is_admin dla każdego obiektu, a dodatkowo lokalizację (miasto, stan i kraj) tylko dla obiektów klienta.
