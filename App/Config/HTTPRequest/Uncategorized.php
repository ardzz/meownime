<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Uncategorized.php
 * @lastModified 11/20/20, 8:19 AM
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
namespace Meownime\Config\HTTPRequest;


use GuzzleHttp\Client;
use Meownime\Config\Meownime;

/**
 * Class Uncategorized
 * @package Meownime\Config\HTTPRequest
 */
class Uncategorized{

    /**
     * @return Client
     */
    function animeList(){
        $url = Meownime::animeList;
        return new Client([
            "base_uri" => $url,
        ]);
    }

    /**
     * @return Client
     */
    function animeRecommendations(){
        $url = Meownime::animeRecommendations;
        return new Client([
            "base_uri" => $url,
        ]);
    }

    /**
     * @return Client
     */
    function releaseSchedule(){
        $url = Meownime::releaseSchedule;
        return new Client([
            "base_uri" => $url,
        ]);
    }

    /**
     * @param     String     $idAnime
     *
     * @return Client
     */
    function lookupAnime(String $idAnime){
        return new Client([
            "base_uri" => Meownime::url . $idAnime
        ]);
    }

    /**
     * @param     String     $query
     *
     * @return Client
     */
    function searchAnime(String $query){
        return new Client([
            //https://meownime.moe/?s=a&orderby=newest
            "base_uri" => Meownime::url . "?s={$query}"
        ]);
    }

}