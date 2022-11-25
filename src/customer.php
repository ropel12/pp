<?php

namespace Satrio\Library;


class Customer
{
    public function __construct(private string $data)
    {
    }

    public function Hello(): string
    {
        return "data: $this->data";
    }
}
