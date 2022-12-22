<?php

namespace App\Services\Anagram;

interface AnagramFinderInterface
{
    public function findAnagrams(string $word): array;
}
