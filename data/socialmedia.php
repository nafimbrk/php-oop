<?php

// final class
// final function
class socialmedia {
    public string $name;
}

final class facebook extends socialmedia {
    final public function login(string $username, string $password): bool {
        return true;
    }
}

// error
// class fakefacebook extends facebook {
//     error
//     public function login($username, $password) {
//         return false;
//     }
// }