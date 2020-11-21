<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Uncategorized.php
 * @lastModified 11/21/20, 6:45 PM
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
namespace Meownime\Page;


use GuzzleHttp\Exception\GuzzleException;
use Meownime\HTTPRequest\UncategorizedRequest;
use Meownime\Parser\HTML;

/**
 * Class Uncategorized
 *
 * @package Meownime\Page
 */
class Uncategorized{

    /**
     * @return array
     * @throws GuzzleException
     */
    function animeList(){
        $http_request = new UncategorizedRequest();
        $html = $http_request->animeList();
        HTML::setHTML($html);
        return HTML::animeList();
    }

    /**
     * @return array
     * @throws GuzzleException
     */
    function animeRecommendations(){
        $http_request = new UncategorizedRequest();
        $html = $http_request->animeRecommendations();
        HTML::setHTML($html);
        return HTML::animeRecommendations();
    }

    /**
     * @return array
     * @throws GuzzleException
     */
    function releaseSchedule(){
        $http_request = new UncategorizedRequest();
        $html = $http_request->releaseSchedule();
        HTML::setHTML($html);
        return HTML::releaseSchedule();
    }

    /**
     * @param $idAnime
     *
     * @return array|false
     * @throws GuzzleException
     */
    function lookupAnime($idAnime){
        $http_request = new UncategorizedRequest();
        $html = $http_request->lookupAnime($idAnime);
        if ($html){
            HTML::setHTML($html);
            return HTML::lookupAnime();
        }else{
            return false;
        }
    }

    function searchAnime($query){
        $http_request = new UncategorizedRequest();
        $html = $http_request->searchAnime($query);
        if ($html){
            HTML::setHTML($html);
            return HTML::searchAnime();
        }else{
            return false;
        }
    }

}