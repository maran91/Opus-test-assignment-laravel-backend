<?php

namespace App\Services\Anagram;

use App\Models\Word;

class AnagramFinder implements AnagramFinderInterface
{
    public function findAnagrams(string $word): array
    {
        if ($word === '') {
            return [];
        }

        $sortedWord = mb_str_split($word);
        sort($sortedWord);
        $sortedWord = implode($sortedWord);

        return Word::where('sorted_word', $sortedWord)
            ->where('word', '!=', $word)
            ->get()
            ->pluck('word')
            ->toArray();
    }
}
