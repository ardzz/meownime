<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file PageInterface.php
 * @lastModified 11/20/20, 4:41 PM
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


/**
 * Interface PageInterface
 * @package Meownime\Page
 */
interface PageInterface{

    /**
     * Parse unSorted anime to array
     * @return array
     */
    function unSorted() : array;

    /**
     * Parse sorted by A-Z anime to array
     * @return array
     */
    function sortByAZ() : array;

    /**
     * Parse sorted by Z-A anime to array
     * @return array
     */
    function sortByZA() : array;

    /**
     * Parse sorted by newest anime to array
     * @return array
     */
    function sortByNewest() : array;

    /**
     * Parse sorted by oldest anime to array
     * @return array
     */
    function sortByOldest() : array;

    /**
     * Parse sorted by most viewest anime to array
     * @return array
     */
    function sortByMostViewest() : array;
}