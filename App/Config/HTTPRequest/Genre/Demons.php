<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Demons.php
 * @lastModified 2020-11-20 09:11:46
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
namespace Meownime\Config\HTTPRequest\Genre;

use GuzzleHttp\Client;
use Meownime\Config\HTTPRequest\ConfigHTTPRequestInterface;
use Meownime\Config\Meownime;

/**
 * Class Demons
 *
 * This class declared as helper and will be used by \Meownime\HTTPRequest\Genre\Demons
 *
 * @see         \Meownime\HTTPRequest\Genre\Demons
 * @author      Ardhana <ardzz@indoxploit.or.id>
 * @package     Meownime\Config\HTTPRequest\Genre
 */
class Demons implements ConfigHTTPRequestInterface{

    /**
     * @param   int     $nextPage   Page order
     * @return  Client
     */
    function unSorted(int $nextPage = 0): Client {
        $url = Meownime::genreDemonsURL;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param   int     $nextPage Page  order
     * @return  Client
     */
    function sortByAZ(int $nextPage = 0): Client {
        $url = Meownime::genreDemonsSortedAZ;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param   int     $nextPage Page  order
     * @return  Client
     */
    function sortByZA(int $nextPage = 0): Client {
        $url = Meownime::genreDemonsSortedZA;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param   int     $nextPage Page  order
     * @return  Client
     */
    function sortByNewest(int $nextPage): Client {
        $url = Meownime::genreDemonsSortedNewest;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param   int     $nextPage Page  order
     * @return  Client
     */
    function sortByOldest(int $nextPage): Client {
        $url = Meownime::genreDemonsSortedOldest;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }

    /**
     * @param   int     $nextPage Page   order
     * @return  Client
     */
    function sortByMostViewest(int $nextPage): Client{
        $url = Meownime::genreDemonsSortedMostViewest;
        return new Client([
            "base_uri" => $nextPage ?  str_replace("{replaceable}", "page/$nextPage", $url) : str_replace("{replaceable}", "", $url),
        ]);
    }
}