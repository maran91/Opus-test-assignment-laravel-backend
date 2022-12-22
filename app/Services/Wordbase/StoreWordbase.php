<?php

namespace App\Services\Wordbase;

use App\Models\Word;

class StoreWordbase
{
    private const BATCH_SIZE = 5000;

    public function store($words): void
    {
        $data = [];
        foreach ($words as $word) {
            if ($word === "") {
                continue;
            }
            $word = mb_strtolower($word);
            $sortedWord = mb_str_split($word);
            sort($sortedWord);
            $sortedWord = implode($sortedWord);
            $data[] = [
                'word' => $word,
                'sorted_word' => $sortedWord,
            ];
        }

        $chunks = array_chunk($data, self::BATCH_SIZE);
        foreach ($chunks as $chunk) {
            Word::upsert($chunk, ['word']);
        }
    }
}
