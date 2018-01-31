<?php

namespace Partyschaum\Koans\CqrsAndEventSourcing\Domain\Model;

class Cart
{
    /** @var Item[] */
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem($item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return Item[]
     */
    public function items(): array
    {
        return $this->items;
    }
}
