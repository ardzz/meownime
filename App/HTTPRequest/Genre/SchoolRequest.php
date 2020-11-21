<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file SchoolRequest.php
 * @lastModified 2020-11-20 17:00:12
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 **/
namespace Meownime\HTTPRequest\Genre;


use GuzzleHttp\Promise\Utils;
use Meownime\Config\HTTPRequest\Genre\School;
use Meownime\Config\Meownime;
use Meownime\HTTPRequest\HTTPRequestInterface;

/**
 * Class SchoolRequest
 *
 * @package Meownime\HTTPRequest\Genre
 */
class SchoolRequest implements HTTPRequestInterface{

    /**
     * Maximum pagination [1,2,3 ... 120]
     * @const int
     */
    private const maxPage = Meownime::genreSchoolMaxPage;

    /**
     * School page but unsorted
     *
     * @return array
     */
    static function unSorted(): array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new School();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $unSorted->unSorted($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * School page but sorted by A-Z
     *
     * @return array|false
     */
    static function sortByAZ(): array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new School();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $unSorted->sortByAZ($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * School page but sorted by Z-A
     *
     * @return array|false
     */
    static function sortByZA(): array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new School();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $unSorted->sortByZA($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * School page but sorted by newest anime
     *
     * @return array|false
     */
    static function sortByNewest(): array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new School();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $unSorted->sortByNewest($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * School page but sorted by oldest anime
     *
     * @return array|false
     */
    static function sortByOldest(): array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new School();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $unSorted->sortByOldest($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * School page but sorted by most viewest
     *
     * @return array|false
     */
    static function sortByMostViewest(): array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new School();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $unSorted->sortByMostViewest($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }
}