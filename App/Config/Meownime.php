<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file Meownime.php
 * @lastModified 11/20/20, 12:40 AM
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
namespace Meownime\Config;

class Meownime
{
    /**
     * Set protocol
     * @string
     */

    const protocol = "https://";

    /**
     * Set current active domain
     * @string
     */

    const domain = "meownime.moe";

    /**
     * Set timeout
     * @var
     */

    const timeout = "5.0";

    /**
     * URL
     * @var
     */

    const url = self::protocol . self::domain . "/";

    /**
     * Uncategorized URL (Mixed)
     * @var
     */

    const animeList = self::url . "anime-list-baru";
    const releaseSchedule = self::url . "jadwal-rilis";
    const animeRecommendations = self::url . "rekomendasi-anime";

    /**
     * Sub path URL
     * @var
     */
    const tag = "tag";

    const orderByAZ = "?orderby=a-z";
    const orderByZA = "?orderby=z-a";
    const orderByNewest = "?orderby=newest";
    const orderByOldest = "?orderby=oldest";
    const orderByMostViewed = "?orderby=most_viewed";

    /**
     * Ongoings URL lists
     * @var
     */

    const ongoingMaxPage = 7; // 7
    const ongoingURL = self::url . self::tag . "/ongoing/{replaceable}";
    const ongoingURLSortedAZ = self::ongoingURL . self::orderByAZ;
    const ongoingURLSortedZA = self::ongoingURL . self::orderByZA;
    const ongoingURLSortedNewest = self::ongoingURL . self::orderByNewest;
    const ongoingURLSortedOldest = self::ongoingURL . self::orderByOldest;
    const ongoingURLSortedMostViewest = self::ongoingURL . self::orderByMostViewed;

    /**
     * Batch URL lists
     * @var
     */

    const batchMaxPage  = 20; // max 125
    const batchURL = self::url . self::tag . "/batch/{replaceable}";
    const batchURLSortedAZ = self::batchURL . self::orderByAZ;
    const batchURLSortedZA = self::batchURL . self::orderByZA;
    const batchURLSortedNewest = self::batchURL . self::orderByNewest;
    const batchURLSortedOldest = self::batchURL . self::orderByOldest;
    const batchURLSortedMostViewest = self::batchURL . self::orderByMostViewed;

    /**
     * Movie URL lists
     * @var
     */

    const movieMaxPage  = 16; // max 16
    const movieURL = self::url . self::tag . "/movie/{replaceable}";
    const movieURLSortedAZ = self::movieURL . self::orderByAZ;
    const movieURLSortedZA = self::movieURL . self::orderByZA;
    const movieURLSortedNewest = self::movieURL . self::orderByNewest;
    const movieURLSortedOldest = self::movieURL . self::orderByOldest;
    const movieURLSortedMostViewest = self::movieURL . self::orderByMostViewed;

    /**
     * -----------------------------------------------
     * Categories URL lists                          |
     * -----------------------------------------------
     * Here's available categories :
     *
     * Action      * Adventure     * Cars         * Comedy
     * Dementia    * Demons        * Drama        * Ecchi
     * Fantasy     * Game          * Harem        * Historical
     * Horror      * Isekai        * Josei        * Kids
     * Live Action * Magic         * Martial Arts * Mecha
     * Military    * Music         * Mystery      * Parody
     * Police      * Psychological * Romance      * Samurai
     * School      * Sci-Fi        * Seinen       * Shoujo
     * Shoujo Ai   * Shounen       * Shounen Ai   * Slice of Life
     * Space       * Sports        * Super Power  * Supernatural
     * Suspense    * Thriller      * Vampire      * Youth
     * @var
     */

    const genre = "genres";
    const genreURL = self::url . self::genre;

    const genreActionMaxPage = 20; // max 57
    const genreActionURL = self::genreURL . "/action/{replaceable}";
    const genreActionSortedAZ = self::genreActionURL . self::orderByAZ;
    const genreActionSortedZA = self::genreActionURL . self::orderByZA;
    const genreActionSortedNewest = self::genreActionURL . self::orderByNewest;
    const genreActionSortedOldest = self::genreActionURL . self::orderByOldest;
    const genreActionSortedMostViewest = self::genreActionURL . self::orderByMostViewed;

    const genreAdventureMaxPage = 20; // max 23
    const genreAdventureURL = self::genreURL . "/adventure/{replaceable}";
    const genreAdventureSortedAZ = self::genreURL . self::orderByAZ;
    const genreAdventureSortedZA = self::genreURL . self::orderByZA;
    const genreAdventureSortedNewest = self::genreURL . self::orderByNewest;
    const genreAdventureSortedOldest = self::genreURL . self::orderByOldest;
    const genreAdventureSortedMostViewest = self::genreURL . self::orderByMostViewed;

    const genreCarsMaxPage = 1; // max 1
    const genreCarsURL = self::genreURL . "/cars/{replaceable}";
    const genreCarsSortedAZ = self::genreCarsURL . self::orderByAZ;
    const genreCarsSortedZA = self::genreCarsURL . self::orderByZA;
    const genreCarsSortedNewest = self::genreCarsURL . self::orderByNewest;
    const genreCarsSortedOldest = self::genreCarsURL . self::orderByOldest;
    const genreCarsSortedMostViewest = self::genreCarsURL . self::orderByMostViewed;

    const genreComedyMaxPage = 20; // max 63
    const genreComedyURL = self::genreURL . "/comedy/{replaceable}";
    const genreComedySortedAZ = self::genreComedyURL . self::orderByAZ;
    const genreComedySortedZA = self::genreComedyURL . self::orderByZA;
    const genreComedySortedNewest = self::genreComedyURL . self::orderByNewest;
    const genreComedySortedOldest = self::genreComedyURL . self::orderByOldest;
    const genreComedySortedMostViewest = self::genreComedyURL . self::orderByMostViewed;

    const genreDementiaMaxPage = 1; // max 1
    const genreDementiaURL = self::genreURL . "/dementia/{replaceable}";
    const genreDementiaSortedAZ = self::genreDementiaURL . self::orderByAZ;
    const genreDementiaSortedZA = self::genreDementiaURL . self::orderByZA;
    const genreDementiaSortedNewest = self::genreDementiaURL . self::orderByNewest;
    const genreDementiaSortedOldest = self::genreDementiaURL . self::orderByOldest;
    const genreDementiaSortedMostViewest = self::genreDementiaURL . self::orderByMostViewed;

    const genreDemonsMaxPage = 7; // max 7
    const genreDemonsURL = self::genreURL . "/demons/{replaceable}";
    const genreDemonsSortedAZ = self::genreDemonsURL . self::orderByAZ;
    const genreDemonsSortedZA = self::genreDemonsURL . self::orderByZA;
    const genreDemonsSortedNewest = self::genreDemonsURL . self::orderByNewest;
    const genreDemonsSortedOldest = self::genreDemonsURL . self::orderByOldest;
    const genreDemonsSortedMostViewest = self::genreDemonsURL . self::orderByMostViewed;

    const genreDramaMaxPage = 20; // max 33
    const genreDramaURL = self::genreURL . "/drama/{replaceable}";
    const genreDramaSortedAZ = self::genreDramaURL . self::orderByAZ;
    const genreDramaSortedZA = self::genreDramaURL . self::orderByZA;
    const genreDramaSortedNewest = self::genreDramaURL . self::orderByNewest;
    const genreDramaSortedOldest = self::genreDramaURL . self::orderByOldest;
    const genreDramaSortedMostViewest = self::genreDramaURL . self::orderByMostViewed;

    const genreEcchiMaxPage = 17; // max 17
    const genreEcchiURL = self::genreURL . "/ecchi/{replaceable}";
    const genreEcchiSortedAZ = self::genreEcchiURL . self::orderByAZ;
    const genreEcchiSortedZA = self::genreEcchiURL . self::orderByZA;
    const genreEcchiSortedNewest = self::genreEcchiURL . self::orderByNewest;
    const genreEcchiSortedOldest = self::genreEcchiURL . self::orderByOldest;
    const genreEcchiSortedMostViewest = self::genreEcchiURL . self::orderByMostViewed;

    const genreFantasyMaxPage = 20; // max 40
    const genreFantasyURL = self::genreURL . "/fantasy/{replaceable}";
    const genreFantasySortedAZ = self::genreFantasyURL . self::orderByAZ;
    const genreFantasySortedZA = self::genreFantasyURL . self::orderByZA;
    const genreFantasySortedNewest = self::genreFantasyURL . self::orderByNewest;
    const genreFantasySortedOldest = self::genreFantasyURL . self::orderByOldest;
    const genreFantasySortedMostViewest = self::genreFantasyURL . self::orderByMostViewed;

    const genreGameMaxPage = 6; // max 6
    const genreGameURL = self::genreURL . "/game/{replaceable}";
    const genreGameSortedAZ = self::genreGameURL . self::orderByAZ;
    const genreGameSortedZA = self::genreGameURL . self::orderByZA;
    const genreGameSortedNewest = self::genreGameURL . self::orderByNewest;
    const genreGameSortedOldest = self::genreGameURL . self::orderByOldest;
    const genreGameSortedMostViewest = self::genreGameURL . self::orderByMostViewed;

    const genreHaremMaxPage = 13; // max 13
    const genreHaremURL = self::genreURL . "/harem/{replaceable}";
    const genreHaremSortedAZ = self::genreHaremURL . self::orderByAZ;
    const genreHaremSortedZA = self::genreHaremURL . self::orderByZA;
    const genreHaremSortedNewest = self::genreHaremURL . self::orderByNewest;
    const genreHaremSortedOldest = self::genreHaremURL . self::orderByOldest;
    const genreHaremSortedMostViewest = self::genreHaremURL . self::orderByMostViewed;

    const genreHistoricalMaxPage = 8; // max 8
    const genreHistoricalURL = self::genreURL . "/historical/{replaceable}";
    const genreHistoricalSortedAZ = self::genreHistoricalURL . self::orderByAZ;
    const genreHistoricalSortedZA = self::genreHistoricalURL . self::orderByZA;
    const genreHistoricalSortedNewest = self::genreHistoricalURL . self::orderByNewest;
    const genreHistoricalSortedOldest = self::genreHistoricalURL . self::orderByOldest;
    const genreHistoricalSortedMostViewest = self::genreHistoricalURL . self::orderByMostViewed;

    const genreHorrorMaxPage = 6; // max 6
    const genreHorrorURL = self::genreURL . "/horror/{replaceable}";
    const genreHorrorSortedAZ = self::genreHorrorURL . self::orderByAZ;
    const genreHorrorSortedZA = self::genreHorrorURL . self::orderByZA;
    const genreHorrorSortedNewest = self::genreHorrorURL . self::orderByNewest;
    const genreHorrorSortedOldest = self::genreHorrorURL . self::orderByOldest;
    const genreHorrorSortedMostViewest = self::genreHorrorURL . self::orderByMostViewed;

    const genreIsekaiMaxPage = 1; // max 1
    const genreIsekaiURL = self::genreURL . "/isekai/{replaceable}";
    const genreIsekaiSortedAZ = self::genreIsekaiURL . self::orderByAZ;
    const genreIsekaiSortedZA = self::genreIsekaiURL . self::orderByZA;
    const genreIsekaiSortedNewest = self::genreIsekaiURL . self::orderByNewest;
    const genreIsekaiSortedOldest = self::genreIsekaiURL . self::orderByOldest;
    const genreIsekaiSortedMostViewest = self::genreIsekaiURL . self::orderByMostViewed;

    const genreJoseiMaxPage = 2; // max 2
    const genreJoseiURL = self::genreURL . "/josei/{replaceable}";
    const genreJoseiSortedAZ = self::genreJoseiURL . self::orderByAZ;
    const genreJoseiSortedZA = self::genreJoseiURL . self::orderByZA;
    const genreJoseiSortedNewest = self::genreJoseiURL . self::orderByNewest;
    const genreJoseiSortedOldest = self::genreJoseiURL . self::orderByOldest;
    const genreJoseiSortedMostViewest = self::genreJoseiURL . self::orderByMostViewed;

    const genreKidsMaxPage = 1; // max 1
    const genreKidsURL = self::genreURL . "/kids/{replaceable}";
    const genreKidsSortedAZ = self::genreKidsURL . self::orderByAZ;
    const genreKidsSortedZA = self::genreKidsURL . self::orderByZA;
    const genreKidsSortedNewest = self::genreKidsURL . self::orderByNewest;
    const genreKidsSortedOldest = self::genreKidsURL . self::orderByOldest;
    const genreKidsSortedMostViewest = self::genreKidsURL . self::orderByMostViewed;

    const genreLiveActionMaxPage = 1; // max 1
    const genreLiveActionURL = self::genreURL . "/liveaction/{replaceable}";
    const genreLiveActionSortedAZ = self::genreLiveActionURL . self::orderByAZ;
    const genreLiveActionSortedZA = self::genreLiveActionURL . self::orderByZA;
    const genreLiveActionSortedNewest = self::genreLiveActionURL . self::orderByNewest;
    const genreLiveActionSortedOldest = self::genreLiveActionURL . self::orderByOldest;
    const genreLiveActionSortedMostViewest = self::genreLiveActionURL . self::orderByMostViewed;

    const genreMagicMaxPage = 16; // max 16
    const genreMagicURL = self::genreURL . "/magic/{replaceable}";
    const genreMagicSortedAZ = self::genreMagicURL . self::orderByAZ;
    const genreMagicSortedZA = self::genreMagicURL . self::orderByZA;
    const genreMagicSortedNewest = self::genreMagicURL . self::orderByNewest;
    const genreMagicSortedOldest = self::genreMagicURL . self::orderByOldest;
    const genreMagicSortedMostViewest = self::genreMagicURL . self::orderByMostViewed;

    const genreMartialArtsMaxPage = 5; // max 5
    const genreMartialArtsURL = self::genreURL . "/martialarts/{replaceable}";
    const genreMartialArtsSortedAZ = self::genreMartialArtsURL . self::orderByAZ;
    const genreMartialArtsSortedZA = self::genreMartialArtsURL . self::orderByZA;
    const genreMartialArtsSortedNewest = self::genreMartialArtsURL . self::orderByNewest;
    const genreMartialArtsSortedOldest = self::genreMartialArtsURL . self::orderByOldest;
    const genreMartialArtsSortedMostViewest = self::genreMartialArtsURL . self::orderByMostViewed;

    const genreMechaMaxPage = 8; // max 8
    const genreMechaURL = self::genreURL . "/mecha/{replaceable}";
    const genreMechaSortedAZ = self::genreMechaURL . self::orderByAZ;
    const genreMechaSortedZA = self::genreMechaURL . self::orderByZA;
    const genreMechaSortedNewest = self::genreMechaURL . self::orderByNewest;
    const genreMechaSortedOldest = self::genreMechaURL . self::orderByOldest;
    const genreMechaSortedMostViewest = self::genreMechaURL . self::orderByMostViewed;

    const genreMilitaryMaxPage = 8; // max 8
    const genreMilitaryURL = self::genreURL . "/military/{replaceable}";
    const genreMilitarySortedAZ = self::genreMilitaryURL . self::orderByAZ;
    const genreMilitarySortedZA = self::genreMilitaryURL . self::orderByZA;
    const genreMilitarySortedNewest = self::genreMilitaryURL . self::orderByNewest;
    const genreMilitarySortedOldest = self::genreMilitaryURL . self::orderByOldest;
    const genreMilitarySortedMostViewest = self::genreMilitaryURL . self::orderByMostViewed;

    const genreMusicMaxPage = 9; // max 9
    const genreMusicURL = self::genreURL . "/music/{replaceable}";
    const genreMusicSortedAZ = self::genreMusicURL . self::orderByAZ;
    const genreMusicSortedZA = self::genreMusicURL . self::orderByZA;
    const genreMusicSortedNewest = self::genreMusicURL . self::orderByNewest;
    const genreMusicSortedOldest = self::genreMusicURL . self::orderByOldest;
    const genreMusicSortedMostViewest = self::genreMusicURL . self::orderByMostViewed;

    const genreMysteryMaxPage = 15; // max 15
    const genreMysteryURL = self::genreURL . "/mystery/{replaceable}";
    const genreMysterySortedAZ = self::genreMysteryURL . self::orderByAZ;
    const genreMysterySortedZA = self::genreMysteryURL . self::orderByZA;
    const genreMysterySortedNewest = self::genreMysteryURL . self::orderByNewest;
    const genreMysterySortedOldest = self::genreMysteryURL . self::orderByOldest;
    const genreMysterySortedMostViewest = self::genreMysteryURL . self::orderByMostViewed;

    const genreParodyMaxPage = 3; // max 3
    const genreParodyURL = self::genreURL . "/parody/{replaceable}";
    const genreParodySortedAZ = self::genreParodyURL . self::orderByAZ;
    const genreParodySortedZA = self::genreParodyURL . self::orderByZA;
    const genreParodySortedNewest = self::genreParodyURL . self::orderByNewest;
    const genreParodySortedOldest = self::genreParodyURL . self::orderByOldest;
    const genreParodySortedMostViewest = self::genreParodyURL . self::orderByMostViewed;

    const genrePoliceMaxPage = 3; // max 3
    const genrePoliceURL = self::genreURL . "/police/{replaceable}";
    const genrePoliceSortedAZ = self::genrePoliceURL . self::orderByAZ;
    const genrePoliceSortedZA = self::genrePoliceURL . self::orderByZA;
    const genrePoliceSortedNewest = self::genrePoliceURL . self::orderByNewest;
    const genrePoliceSortedOldest = self::genrePoliceURL . self::orderByOldest;
    const genrePoliceSortedMostViewest = self::genrePoliceURL . self::orderByMostViewed;

    const genrePsychologicalMaxPage = 8; // max 8
    const genrePsychologicalURL = self::genreURL . "/psychological/{replaceable}";
    const genrePsychologicalSortedAZ = self::genrePsychologicalURL . self::orderByAZ;
    const genrePsychologicalSortedZA = self::genrePsychologicalURL . self::orderByZA;
    const genrePsychologicalSortedNewest = self::genrePsychologicalURL . self::orderByNewest;
    const genrePsychologicalSortedOldest = self::genrePsychologicalURL . self::orderByOldest;
    const genrePsychologicalSortedMostViewest = self::genrePsychologicalURL . self::orderByMostViewed;

    const genreRomanceMaxPage = 20; // max 38
    const genreRomanceURL = self::genreURL . "/romance/{replaceable}";
    const genreRomanceSortedAZ = self::genreRomanceURL . self::orderByAZ;
    const genreRomanceSortedZA = self::genreRomanceURL . self::orderByZA;
    const genreRomanceSortedNewest = self::genreRomanceURL . self::orderByNewest;
    const genreRomanceSortedOldest = self::genreRomanceURL . self::orderByOldest;
    const genreRomanceSortedMostViewest = self::genreRomanceURL . self::orderByMostViewed;

    const genreSamuraiMaxPage = 3; // max 3
    const genreSamuraiURL = self::genreURL . "/samurai/{replaceable}";
    const genreSamuraiSortedAZ = self::genreSamuraiURL . self::orderByAZ;
    const genreSamuraiSortedZA = self::genreSamuraiURL . self::orderByZA;
    const genreSamuraiSortedNewest = self::genreSamuraiURL . self::orderByNewest;
    const genreSamuraiSortedOldest = self::genreSamuraiURL . self::orderByOldest;
    const genreSamuraiSortedMostViewest = self::genreSamuraiURL . self::orderByMostViewed;

    const genreSchoolMaxPage = 20; // max 44
    const genreSchoolURL = self::genreURL . "/school/{replaceable}";
    const genreSchoolSortedAZ = self::genreSchoolURL . self::orderByAZ;
    const genreSchoolSortedZA = self::genreSchoolURL . self::orderByZA;
    const genreSchoolSortedNewest = self::genreSchoolURL . self::orderByNewest;
    const genreSchoolSortedOldest = self::genreSchoolURL . self::orderByOldest;
    const genreSchoolSortedMostViewest = self::genreSchoolURL . self::orderByMostViewed;

    const genreSciFiMaxPage = 20; // max 24
    const genreSciFiURL = self::genreURL . "/sci-fi/{replaceable}";
    const genreSciFiSortedAZ = self::genreSciFiURL . self::orderByAZ;
    const genreSciFiSortedZA = self::genreSciFiURL . self::orderByZA;
    const genreSciFiSortedNewest = self::genreSciFiURL . self::orderByNewest;
    const genreSciFiSortedOldest = self::genreSciFiURL . self::orderByOldest;
    const genreSciFiSortedMostViewest = self::genreSciFiURL . self::orderByMostViewed;

    const genreSeinenMaxPage = 17; // max 17
    const genreSeinenURL = self::genreURL . "/seinen/{replaceable}";
    const genreSeinenSortedAZ = self::genreSeinenURL . self::orderByAZ;
    const genreSeinenSortedZA = self::genreSeinenURL . self::orderByZA;
    const genreSeinenSortedNewest = self::genreSeinenURL . self::orderByNewest;
    const genreSeinenSortedOldest = self::genreSeinenURL . self::orderByOldest;
    const genreSeinenSortedMostViewest = self::genreSeinenURL . self::orderByMostViewed;

    const genreShoujoMaxPage = 6; // max 6
    const genreShoujoURL = self::genreURL . "/shoujo/{replaceable}";
    const genreShoujoSortedAZ = self::genreShoujoURL . self::orderByAZ;
    const genreShoujoSortedZA = self::genreShoujoURL . self::orderByZA;
    const genreShoujoSortedNewest = self::genreShoujoURL . self::orderByNewest;
    const genreShoujoSortedOldest = self::genreShoujoURL . self::orderByOldest;
    const genreShoujoSortedMostViewest = self::genreShoujoURL . self::orderByMostViewed;

    const genreShoujoAiMaxPage = 3; // max 3
    const genreShoujoAiURL = self::genreURL . "/shoujoai/{replaceable}";
    const genreShoujoAiSortedAZ = self::genreShoujoAiURL . self::orderByAZ;
    const genreShoujoAiSortedZA = self::genreShoujoAiURL . self::orderByZA;
    const genreShoujoAiSortedNewest = self::genreShoujoAiURL . self::orderByNewest;
    const genreShoujoAiSortedOldest = self::genreShoujoAiURL . self::orderByOldest;
    const genreShoujoAiSortedMostViewest = self::genreShoujoAiURL . self::orderByMostViewed;

    const genreShounenMaxPage = 20; // max 25
    const genreShounenURL = self::genreURL . "/shounen/{replaceable}";
    const genreShounenSortedAZ = self::genreShounenURL . self::orderByAZ;
    const genreShounenSortedZA = self::genreShounenURL . self::orderByZA;
    const genreShounenSortedNewest = self::genreShounenURL . self::orderByNewest;
    const genreShounenSortedOldest = self::genreShounenURL . self::orderByOldest;
    const genreShounenSortedMostViewest = self::genreShounenURL . self::orderByMostViewed;

    const genreShounenAiMaxPage = 1; // max 1
    const genreShounenAiURL = self::genreURL . "/shounenai/{replaceable}";
    const genreShounenAiSortedAZ = self::genreShounenAiURL . self::orderByAZ;
    const genreShounenAiSortedZA = self::genreShounenAiURL . self::orderByZA;
    const genreShounenAiSortedNewest = self::genreShounenAiURL . self::orderByNewest;
    const genreShounenAiSortedOldest = self::genreShounenAiURL . self::orderByOldest;
    const genreShounenAiSortedMostViewest = self::genreShounenAiURL . self::orderByMostViewed;

    const genreSliceofLifeMaxPage = 20; // max 31
    const genreSliceofLifeURL = self::genreURL . "/sliceoflife/{replaceable}";
    const genreSliceofLifeSortedAZ = self::genreSliceofLifeURL . self::orderByAZ;
    const genreSliceofLifeSortedZA = self::genreSliceofLifeURL . self::orderByZA;
    const genreSliceofLifeSortedNewest = self::genreSliceofLifeURL . self::orderByNewest;
    const genreSliceofLifeSortedOldest = self::genreSliceofLifeURL . self::orderByOldest;
    const genreSliceofLifeSortedMostViewest = self::genreSliceofLifeURL . self::orderByMostViewed;

    const genreSpaceMaxPage = 3; // max 3
    const genreSpaceURL = self::genreURL . "/space/{replaceable}";
    const genreSpaceSortedAZ = self::genreSpaceURL . self::orderByAZ;
    const genreSpaceSortedZA = self::genreSpaceURL . self::orderByZA;
    const genreSpaceSortedNewest = self::genreSpaceURL . self::orderByNewest;
    const genreSpaceSortedOldest = self::genreSpaceURL . self::orderByOldest;
    const genreSpaceSortedMostViewest = self::genreSpaceURL . self::orderByMostViewed;

    const genreSportsMaxPage = 7; // max 7
    const genreSportsURL = self::genreURL . "/sports/{replaceable}";
    const genreSportsSortedAZ = self::genreSportsURL . self::orderByAZ;
    const genreSportsSortedZA = self::genreSportsURL . self::orderByZA;
    const genreSportsSortedNewest = self::genreSportsURL . self::orderByNewest;
    const genreSportsSortedOldest = self::genreSportsURL . self::orderByOldest;
    const genreSportsSortedMostViewest = self::genreSportsURL . self::orderByMostViewed;

    const genreSuperPowerMaxPage = 10; // max 10
    const genreSuperPowerURL = self::genreURL . "/superpower/{replaceable}";
    const genreSuperPowerSortedAZ = self::genreSuperPowerURL . self::orderByAZ;
    const genreSuperPowerSortedZA = self::genreSuperPowerURL . self::orderByZA;
    const genreSuperPowerSortedNewest = self::genreSuperPowerURL . self::orderByNewest;
    const genreSuperPowerSortedOldest = self::genreSuperPowerURL . self::orderByOldest;
    const genreSuperPowerSortedMostViewest = self::genreSuperPowerURL . self::orderByMostViewed;

    const genreSupernaturalMaxPage = 20; // max 30
    const genreSupernaturalURL = self::genreURL . "/supernatural/{replaceable}";
    const genreSupernaturalSortedAZ = self::genreSupernaturalURL . self::orderByAZ;
    const genreSupernaturalSortedZA = self::genreSupernaturalURL . self::orderByZA;
    const genreSupernaturalSortedNewest = self::genreSupernaturalURL . self::orderByNewest;
    const genreSupernaturalSortedOldest = self::genreSupernaturalURL . self::orderByOldest;
    const genreSupernaturalSortedMostViewest = self::genreSupernaturalURL . self::orderByMostViewed;

    const genreSuspenseMaxPage = 1; // max 1
    const genreSuspenseURL = self::genreURL . "/suspense/{replaceable}";
    const genreSuspenseSortedAZ = self::genreSuspenseURL . self::orderByAZ;
    const genreSuspenseSortedZA = self::genreSuspenseURL . self::orderByZA;
    const genreSuspenseSortedNewest = self::genreSuspenseURL . self::orderByNewest;
    const genreSuspenseSortedOldest = self::genreSuspenseURL . self::orderByOldest;
    const genreSuspenseSortedMostViewest = self::genreSuspenseURL . self::orderByMostViewed;

    const genreThrillerMaxPage = 3; // max 3
    const genreThrillerURL = self::genreURL . "/thriller/{replaceable}";
    const genreThrillerSortedAZ = self::genreThrillerURL . self::orderByAZ;
    const genreThrillerSortedZA = self::genreThrillerURL . self::orderByZA;
    const genreThrillerSortedNewest = self::genreThrillerURL . self::orderByNewest;
    const genreThrillerSortedOldest = self::genreThrillerURL . self::orderByOldest;
    const genreThrillerSortedMostViewest = self::genreThrillerURL . self::orderByMostViewed;

    const genreVampireMaxPage = 4; // max 4
    const genreVampireURL = self::genreURL . "/vampire/{replaceable}";
    const genreVampireSortedAZ = self::genreVampireURL . self::orderByAZ;
    const genreVampireSortedZA = self::genreVampireURL . self::orderByZA;
    const genreVampireSortedNewest = self::genreVampireURL . self::orderByNewest;
    const genreVampireSortedOldest = self::genreVampireURL . self::orderByOldest;
    const genreVampireSortedMostViewest = self::genreVampireURL . self::orderByMostViewed;

    const genreYouthMaxPage = 1; // max 1
    const genreYouthURL = self::genreURL . "/youth/{replaceable}";
    const genreYouthSortedAZ = self::genreYouthURL . self::orderByAZ;
    const genreYouthSortedZA = self::genreYouthURL . self::orderByZA;
    const genreYouthSortedNewest = self::genreYouthURL . self::orderByNewest;
    const genreYouthSortedOldest = self::genreYouthURL . self::orderByOldest;
    const genreYouthSortedMostViewest = self::genreYouthURL . self::orderByMostViewed;

}