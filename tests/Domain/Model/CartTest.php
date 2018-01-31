<?php

namespace Partyschaum\Koans\CqrsAndEventSourcing\Tests\Domain\Model;

use Partyschaum\Koans\CqrsAndEventSourcing\Domain\Model\Cart;
use Partyschaum\Koans\CqrsAndEventSourcing\Domain\Model\Item;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    /**
     * @test
     */
    public function addItem()
    {
        $item = new Item('Super Hot Chocolate', 12.99, 2);

        $cart = new Cart();
        $cart->addItem($item);

        $this->assertContains($item, $cart->items());
    }
}
