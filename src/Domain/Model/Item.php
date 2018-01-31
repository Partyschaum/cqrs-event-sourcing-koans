<?php

namespace Partyschaum\Koans\CqrsAndEventSourcing\Domain\Model;

class Item
{
    private $name;
    private $price;
    private $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }
}
