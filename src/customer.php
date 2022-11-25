<?php

namespace Satrio\Library;


class Customer
{
    public function __construct(private string $data = "guest")
    {
    }

    public function Hello(string $data): string
    {
        return "data: $this->data , $data";
    }
}
