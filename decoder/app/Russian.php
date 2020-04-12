<?php


namespace App;


class Russian
{

    private const ALPHABET = ['а', 'б', 'в', 'г', 'д', 'е',
    'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о',
    'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
    'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];

    public function __construct()
    {

    }
    public function  getCountAlphabet ()
    {
        return count(self::ALPHABET);
    }

    public function getIndexInAlphabet ($symbol)
    {
        return array_search($symbol, self::ALPHABET);
    }

    public function getCharFromAlphabet ($index)
    {
        return self::ALPHABET[$index];
    }

}
