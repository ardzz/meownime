<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Youth.php
 * @lastModified 2020-11-20 17:01:01
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
namespace Meownime\Page\Genre;


use Meownime\Page\PageInterface;
use Meownime\HTTPRequest\Genre\YouthRequest;
use Meownime\Parser\HTML;

/**
 * Class Youth
 *
 * @package Meownime\Page\Genre
 */
class Youth implements PageInterface
{
    /**
     * @return array
     */

    function unSorted() : array {
        $raw_html = YouthRequest::unSorted();
        $output   = [];
        foreach ($raw_html as $value){
            HTML::setHTML($value);
            foreach (HTML::genre() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     */

    function sortByAZ() : array {
        $raw_html = YouthRequest::sortByAZ();
        $output   = [];
        foreach ($raw_html as $value){
            HTML::setHTML($value);
            foreach (HTML::genre() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     */

    function sortByZA() : array {
        $raw_html = YouthRequest::sortByZA();
        $output   = [];
        foreach ($raw_html as $value){
            HTML::setHTML($value);
            foreach (HTML::genre() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     */

    function sortByNewest() : array {
        $raw_html = YouthRequest::sortByNewest();
        $output   = [];
        foreach ($raw_html as $value){
            HTML::setHTML($value);
            foreach (HTML::genre() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     */

    function sortByOldest() : array {
        $raw_html = YouthRequest::sortByOldest();
        $output   = [];
        foreach ($raw_html as $value){
            HTML::setHTML($value);
            foreach (HTML::genre() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }

    /**
     * @return array|HTML
     */

    function sortByMostViewest() : array {
        $raw_html = YouthRequest::sortByMostViewest();
        $output   = [];
        foreach ($raw_html as $value){
            HTML::setHTML($value);
            foreach (HTML::genre() as $ongoing){
                $output[] = $ongoing;
            }
        }
        return $output;
    }
}