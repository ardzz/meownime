<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Ongoing.php
 * @lastModified 11/21/20, 5:10 PM
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
namespace Meownime\Page\Tag;

use GuzzleHttp\Exception\GuzzleException;
use Meownime\HTTPRequest\Tag\OngoingRequest;
use Meownime\Page\PageInterface;
use Meownime\Parser\HTML;

/**
 * Class Meow
 * @package Meownime
 */
class Ongoing implements PageInterface {

    /**
     * @return array
     * @throws GuzzleException
     */

    function unSorted() : array {
        $html = OngoingRequest::unSorted();
        $output = [];
        foreach ($html as $value){
            HTML::setHTML($value);
            foreach (HTML::ongoing() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     * @throws GuzzleException
     */

    function sortByAZ() : array {
        $html = OngoingRequest::sortByAZ();
        $output = [];
        foreach ($html as $value){
            HTML::setHTML($value);
            foreach (HTML::ongoing() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     * @throws GuzzleException
     */

    function sortByZA() : array {
        $html = OngoingRequest::sortByZA();
        $output = [];
        foreach ($html as $value){
            HTML::setHTML($value);
            foreach (HTML::ongoing() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     * @throws GuzzleException
     */

    function sortByNewest() : array {
        $html = OngoingRequest::sortByNewest();
        $output = [];
        foreach ($html as $value){
            HTML::setHTML($value);
            foreach (HTML::ongoing() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     * @throws GuzzleException
     */

    function sortByOldest() : array {
        $html = OngoingRequest::sortByOldest();
        $output = [];
        foreach ($html as $value){
            HTML::setHTML($value);
            foreach (HTML::ongoing() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     * @throws GuzzleException
     */

    function sortByMostViewest() : array {
        $html = OngoingRequest::sortByMostViewest();
        $output = [];
        foreach ($html as $value){
            HTML::setHTML($value);
            foreach (HTML::ongoing() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }
    
}