<?php declare(strict_types=1);

namespace Test\Algorithms\Search\LinearSearch;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Search\LinearSearch;

class LinearSearchTest extends TestCase
{
    private $arr = [12, 2, 32, 4, 55, 20, 100, 1];

    public function testCanSearch()
    {
        $result = (new LinearSearch())->search($this->arr, 20);
        $this->assertSame(5, $result);
    }

    public function testCanNotGetResult()
    {
        $result = (new LinearSearch())->search($this->arr, 101);
        $this->assertNull($result);
    }
}