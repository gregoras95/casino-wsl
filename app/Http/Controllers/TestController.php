<?php

namespace App\Http\Controllers;

class TestController
{
    public function index(): array
    {
        return [
            1 => '32',
            2 => '242',
            3 => 'test'
        ];
    }
}
