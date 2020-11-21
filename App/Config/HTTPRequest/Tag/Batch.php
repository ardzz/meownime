<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Batch.php
 * @lastModified 11/20/20, 12:12 AM
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
namespace Meownime\Config\HTTPRequest\Tag;

use Meownime\Config\HTTPRequest\ConfigHTTPRequestInterface;
use Meownime\Config\Meownime;
use GuzzleHttp\Client;

/**
 * Class HTTPRequest
 * @package Meownime\Config
 */
class Batch implements ConfigHTTPRequestInterface {

    /**
     * @param int $nextPage
     * @return Client
     */

    function unSorted(int $nextPage = 0) : Client {
        $url = Meownime::batchURL;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param $nextPage
     * @return Client
     */

    function sortByAZ(int $nextPage = 0) : Client {
        $url = Meownime::batchURLSortedAZ;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param $nextPage
     * @return Client
     */

    function sortByZA(int $nextPage = 0) : Client {
        $url = Meownime::batchURLSortedZA;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param $nextPage
     * @return Client
     */

    function sortByNewest(int $nextPage = 0) : Client {
        $url = Meownime::batchURLSortedNewest;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param $nextPage
     * @return Client
     */

    function sortByOldest(int $nextPage = 0) : Client {
        $url = Meownime::batchURLSortedOldest;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param $nextPage
     * @return Client
     */

    function sortByMostViewest(int $nextPage = 0) : Client {
        $url = Meownime::batchURLSortedMostViewest;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

}