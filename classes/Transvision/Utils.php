<?php
namespace Transvision;

/**
 * Utils class
 *
 * Various static methods that don't belong yet to a specialized class
 *
 * @package Transvision
 */
class Utils
{
    /**
     * Split a sentence in words from longest to shortest
     *
     * @param string $sentence
     * @return array all the words in the sentence sorted by length
     */
    public static function uniqueWords($sentence)
    {
        $words = explode(' ', $sentence);
        $words = array_filter($words); // filter out extra spaces
        $words = array_unique($words); // remove duplicate words
        // sort words from longest to shortest
        usort(
            $words,
            function ($a, $b) {
                return mb_strlen($b) - mb_strlen($a);
            }
        );

        return $words;
    }
}
