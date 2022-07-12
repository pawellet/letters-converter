<?php

declare(strict_types=1);

namespace App\Model;


class ConverterModel
{
    private string $numbers;

    public function __construct()
    {
        $this->numbers = '';
    }

    private const PHONE_KEYS_NUMBERS =
    [
        1 => ['.', ',', ':', '?'],
        2 => ['a', 'b', 'c'],
        3 => ['d', 'e', 'f'],
        4 => ['g', 'h', 'i'],
        5 => ['j', 'k', 'l'],
        6 => ['m', 'n', 'o'],
        7 => ['p', 'q', 'r', 's'],
        8 => ['t', 'u', 'v'],
        9 => ['w', 'x', 'y', 'z'],
        0 => [' ']
    ];

    public function convertPhrase($phrase): string
    {

        for ($i = 0; $i < strlen($phrase); $i++) {
            if (ctype_upper(substr($phrase, $i, 1))) {
                $this->numbers .= '#';
            }

            foreach (self::PHONE_KEYS_NUMBERS as $index => $item) {
                foreach ($item as $key => $letter) {

                    if (strtolower(substr($phrase, $i, 1)) === $letter) {
                        switch ($key) {
                            case 0:
                                $this->numbers .= $index;
                                break;
                            case 1:
                                for ($n = 0; $n < 2; $n++) {
                                    $this->numbers .= $index;
                                }
                                break;
                            case 2:
                                for ($n = 0; $n < 3; $n++) {
                                    $this->numbers .= $index;
                                }
                                break;
                            case 3:
                                for ($n = 0; $n < 4; $n++) {
                                    $this->numbers .= $index;
                                }
                                break;
                        }
                    }
                }
            }
        }
        return $this->numbers;
    }
}
