<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require 'functions.php';

final class test extends TestCase
{
    public function testCanReturnCoke(): void
    {
        $this->assertEquals(
            'Coke',
            functions::returnCokeFanta(3)
        );
    }

    public function testCannotReturnCoke(): void
    {
        $this->assertNotEquals(
            'Fanta',
            functions::returnCokeFanta(3)
        );
    }

    public function testCanReturnCokeFanta(): void
    {
        $this->assertEquals(
            'CokeFanta',
            functions::returnCokeFanta(15)
        );
    }
}
