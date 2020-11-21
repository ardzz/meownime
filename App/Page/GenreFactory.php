<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file GenreFactory.php
 * @lastModified 11/20/20, 4:47 PM
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

use Meownime\Page\Genre\Action;
use Meownime\Page\Genre\Adventure;
use Meownime\Page\Genre\Cars;
use Meownime\Page\Genre\Comedy;
use Meownime\Page\Genre\Dementia;
use Meownime\Page\Genre\Demons;
use Meownime\Page\Genre\Drama;
use Meownime\Page\Genre\Ecchi;
use Meownime\Page\Genre\Fantasy;
use Meownime\Page\Genre\Game;
use Meownime\Page\Genre\Harem;
use Meownime\Page\Genre\Historical;
use Meownime\Page\Genre\Horror;
use Meownime\Page\Genre\Isekai;
use Meownime\Page\Genre\Josei;
use Meownime\Page\Genre\Kids;
use Meownime\Page\Genre\LiveAction;
use Meownime\Page\Genre\Magic;
use Meownime\Page\Genre\MartialArts;
use Meownime\Page\Genre\Mecha;
use Meownime\Page\Genre\Military;
use Meownime\Page\Genre\Music;
use Meownime\Page\Genre\Mystery;
use Meownime\Page\Genre\Parody;
use Meownime\Page\Genre\Police;
use Meownime\Page\Genre\Psychological;
use Meownime\Page\Genre\Romance;
use Meownime\Page\Genre\Samurai;
use Meownime\Page\Genre\School;
use Meownime\Page\Genre\SciFi;
use Meownime\Page\Genre\Seinen;
use Meownime\Page\Genre\Shoujo;
use Meownime\Page\Genre\ShoujoAi;
use Meownime\Page\Genre\Shounen;
use Meownime\Page\Genre\ShounenAi;
use Meownime\Page\Genre\SliceofLife;
use Meownime\Page\Genre\Space;
use Meownime\Page\Genre\Sports;
use Meownime\Page\Genre\SuperPower;
use Meownime\Page\Genre\Supernatural;
use Meownime\Page\Genre\Suspense;
use Meownime\Page\Genre\Thriller;
use Meownime\Page\Genre\Vampire;
use Meownime\Page\Genre\Youth;



/**
 * Class GenreFactory
 *
 * @package Meownime\Page
 */
class GenreFactory{
    /**
     * @return Action
     */
    function action(){
        return new Action();
    }

    /**
     * @return Adventure
     */
    function adventure(){
        return new Adventure();
    }

    /**
     * @return Cars
     */
    function cars(){
        return new Cars();
    }

    /**
     * @return Comedy
     */
    function comedy(){
        return new Comedy();
    }

    /**
     * @return Dementia
     */
    function dementia(){
        return new Dementia();
    }

    /**
     * @return Demons
     */
    function demons(){
        return new Demons();
    }

    /**
     * @return Drama
     */
    function drama(){
        return new Drama();
    }

    /**
     * @return Ecchi
     */
    function ecchi(){
        return new Ecchi();
    }

    /**
     * @return Fantasy
     */
    function fantasy(){
        return new Fantasy();
    }

    /**
     * @return Game
     */
    function game(){
        return new Game();
    }

    /**
     * @return Harem
     */
    function harem(){
        return new Harem();
    }

    /**
     * @return Historical
     */
    function historical(){
        return new Historical();
    }

    /**
     * @return Horror
     */
    function horror(){
        return new Horror();
    }

    /**
     * @return Isekai
     */
    function isekai(){
        return new Isekai();
    }

    /**
     * @return Josei
     */
    function josei(){
        return new Josei();
    }

    /**
     * @return Kids
     */
    function kids(){
        return new Kids();
    }

    /**
     * @return LiveAction
     */
    function liveAction(){
        return new LiveAction();
    }

    /**
     * @return Magic
     */
    function magic(){
        return new Magic();
    }

    /**
     * @return MartialArts
     */
    function martialArts(){
        return new MartialArts();
    }

    /**
     * @return Mecha
     */
    function mecha(){
        return new Mecha();
    }

    /**
     * @return Military
     */
    function military(){
        return new Military();
    }

    /**
     * @return Music
     */
    function music(){
        return new Music();
    }

    /**
     * @return Mystery
     */
    function mystery(){
        return new Mystery();
    }

    /**
     * @return Parody
     */
    function parody(){
        return new Parody();
    }

    /**
     * @return Police
     */
    function police(){
        return new Police();
    }

    /**
     * @return Psychological
     */
    function psychological(){
        return new Psychological();
    }

    /**
     * @return Romance
     */
    function romance(){
        return new Romance();
    }

    /**
     * @return Samurai
     */
    function samurai(){
        return new Samurai();
    }

    /**
     * @return School
     */
    function school(){
        return new School();
    }

    /**
     * @return SciFi
     */
    function sciFi(){
        return new SciFi();
    }

    /**
     * @return Seinen
     */
    function seinen(){
        return new Seinen();
    }

    /**
     * @return Shoujo
     */
    function shoujo(){
        return new Shoujo();
    }

    /**
     * @return ShoujoAi
     */
    function shoujoAi(){
        return new ShoujoAi();
    }

    /**
     * @return Shounen
     */
    function shounen(){
        return new Shounen();
    }

    /**
     * @return ShounenAi
     */
    function shounenAi(){
        return new ShounenAi();
    }

    /**
     * @return SliceofLife
     */
    function sliceofLife(){
        return new SliceofLife();
    }

    /**
     * @return Space
     */
    function space(){
        return new Space();
    }

    /**
     * @return Sports
     */
    function sports(){
        return new Sports();
    }

    /**
     * @return SuperPower
     */
    function superPower(){
        return new SuperPower();
    }

    /**
     * @return Supernatural
     */
    function supernatural(){
        return new Supernatural();
    }

    /**
     * @return Suspense
     */
    function suspense(){
        return new Suspense();
    }

    /**
     * @return Thriller
     */
    function thriller(){
        return new Thriller();
    }

    /**
     * @return Vampire
     */
    function vampire(){
        return new Vampire();
    }

    /**
     * @return Youth
     */
    function youth(){
        return new Youth();
    }
}