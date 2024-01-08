<?php

namespace App\Auth;

use RuntimeException;
use Throwable;

class AuthException extends RuntimeException // Héritage de RuntimeException qui est classe natif de php
{
    public static function invalidCredentials(Throwable|null $previous = null): self
    {
        return new self('Invalid credentials', previous: $previous); // Méthode statique pour créer une exception spécifique.
    }
}
