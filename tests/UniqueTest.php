<?php

namespace Tests\Club;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Unique::class)]



class UniqueTest extends CoversClass {
    
    public static function objetUnique(): void
    {
       $this -> expectException(Erro::class);
       new Unique();
    }

}


