<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file getGenreAnime.php
 * @lastModified 11/21/20, 6:41 PM
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

require_once "vendor/autoload.php";

use Meownime\Meownime;

$meownime = new Meownime;
/**
 * for example I use Action as genre
 * Here's list of available genre :
 *
 * $meownime->genre()->action()->unSorted();
 * $meownime->genre()->adventure()->unSorted();
 * $meownime->genre()->cars()->unSorted();
 * $meownime->genre()->comedy()->unSorted();
 * $meownime->genre()->dementia()->unSorted();
 * $meownime->genre()->demons()->unSorted();
 * $meownime->genre()->drama()->unSorted();
 * $meownime->genre()->ecchi()->unSorted();
 * $meownime->genre()->fantasy()->unSorted();
 * $meownime->genre()->game()->unSorted();
 * $meownime->genre()->harem()->unSorted();
 * $meownime->genre()->historical()->unSorted();
 * $meownime->genre()->horror()->unSorted();
 * $meownime->genre()->isekai()->unSorted();
 * $meownime->genre()->josei()->unSorted();
 * $meownime->genre()->kids()->unSorted();
 * $meownime->genre()->liveAction()->unSorted();
 * $meownime->genre()->magic()->unSorted();
 * $meownime->genre()->martialArts()->unSorted();
 * $meownime->genre()->mecha()->unSorted();
 * $meownime->genre()->military()->unSorted();
 * $meownime->genre()->music()->unSorted();
 * $meownime->genre()->mystery()->unSorted();
 * $meownime->genre()->parody()->unSorted();
 * $meownime->genre()->police()->unSorted();
 * $meownime->genre()->psychological()->unSorted();
 * $meownime->genre()->romance()->unSorted();
 * $meownime->genre()->samurai()->unSorted();
 * $meownime->genre()->school()->unSorted();
 * $meownime->genre()->sciFi()->unSorted();
 * $meownime->genre()->seinen()->unSorted();
 * $meownime->genre()->shoujo()->unSorted();
 * $meownime->genre()->shoujoAi()->unSorted();
 * $meownime->genre()->shounen()->unSorted();
 * $meownime->genre()->shounenAi()->unSorted();
 * $meownime->genre()->sliceofLife()->unSorted();
 * $meownime->genre()->space()->unSorted();
 * $meownime->genre()->sports()->unSorted();
 * $meownime->genre()->superPower()->unSorted();
 * $meownime->genre()->supernatural()->unSorted();
 * $meownime->genre()->suspense()->unSorted();
 * $meownime->genre()->thriller()->unSorted();
 * $meownime->genre()->vampire()->unSorted();
 * $meownime->genre()->youth()->unSorted();
 *
*/
$output = $meownime->genre()->action()->unSorted();

print_r($output);