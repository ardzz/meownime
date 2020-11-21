<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file OngoingRequest.php
 * @lastModified 11/20/20, 8:28 AM
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
namespace Meownime\HTTPRequest\Tag;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise\Utils;
use Meownime\Config\HTTPRequest\Tag\Ongoing;
use Meownime\Config\Meownime;
use Meownime\HTTPRequest\HTTPRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Request
 * @package Meownime\HTTP
 */
class OngoingRequest implements HTTPRequestInterface {

    /**
     * @var
     */

    private const maxPage = Meownime::ongoingMaxPage;

    /**
     * @return array|boolean
     * @throws GuzzleException
     */

    static function unSorted() : array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $unSorted = new Ongoing();
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
     * @return array|false
     * @throws GuzzleException
     */

    static function sortByAZ() : array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $sortByAZ = new Ongoing();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $sortByAZ->sortByAZ($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * @return array|false
     * @throws GuzzleException
     */

    static function sortByZA() : array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $sortByZA = new Ongoing();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $sortByZA->sortByZA($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * @return array|false
     * @throws GuzzleException
     */

    static function sortByNewest() : array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $sortByNewest = new Ongoing();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $sortByNewest->sortByNewest($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * @return array|false
     * @throws GuzzleException
     */

    static function sortByOldest() : array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $sortByOldest = new Ongoing();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $sortByOldest->sortByOldest($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }

    /**
     * @return array|false|ResponseInterface
     * @throws GuzzleException
     */

    static function sortByMostViewest() : array {
        $output   = [];
        $range    = range(1, self::maxPage);
        $sortByMostViewest = new Ongoing();
        $promises = [];
        foreach ($range as $number){
            $promises[] = $sortByMostViewest->sortByMostViewest($number)->requestAsync("GET");
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $value){
            $output[] = $value["value"]->getBody()->getcontents();
        }
        return $output;
    }
}