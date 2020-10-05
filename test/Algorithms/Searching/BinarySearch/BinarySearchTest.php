<?php

namespace Test\Algorithms\Searching\BinarySearch;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Searching\BinarySearch\BinarySearch;

class BinarySearchTest extends TestCase
{
    private $arr = [1, 3, 5, 6, 34, 66, 77, 100];

    public function testFirstCase()
    {
        $result = BinarySearch::search($this->arr, 77);
        $this->assertSame(6, $result);
    }

    public function testSecondCase()
    {
        $result = BinarySearch::search($this->arr, 34);
        $this->assertSame(4, $result);
    }
}