<?php

namespace App\Http\Controllers\Api;

use App\Services\Anagram\AnagramFinderInterface;

class AnagramController
{
    public function __construct(private AnagramFinderInterface $anagramFinder)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param string $word
     * @return array
     */
    public function show(string $word)
    {
        return $this->anagramFinder->findAnagrams($word);
    }
}
