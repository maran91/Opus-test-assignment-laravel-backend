<?php

namespace App\Services\Wordbase;

interface WordbaseSourceInterface
{
    public function getWords(): array;
}
