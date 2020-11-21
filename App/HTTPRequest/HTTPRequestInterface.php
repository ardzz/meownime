<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file HTTPRequestInterface.php
 * @lastModified 11/20/20, 12:44 AM
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
namespace Meownime\HTTPRequest;


/**
 * Interface HTTPRequestInterface
 *
 * @package Meownime\HTTPRequest
 */
interface HTTPRequestInterface{
    /**
     * @return array
     */
    static function unSorted() : array;

    /**
     * @return array
     */
    static function sortByAZ() : array;

    /**
     * @return array
     */
    static function sortByZA() : array;

    /**
     * @return array
     */
    static function sortByNewest() : array;

    /**
     * @return array
     */
    static function sortByOldest() : array;

    /**
     * @return array
     */
    static function sortByMostViewest() : array;
}