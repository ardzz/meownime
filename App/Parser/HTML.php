<?php
/**
 * Meownime Library
 *
 * @copyright Copyright (c) 2020 Ardhana
 * @author Ardhana <ardzz@indoxploit.or.id>
 * @file HTML.php
 * @lastModified 11/20/20, 12:49 AM
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
namespace Meownime\Parser;

use Meownime\Config\Meownime;
use voku\helper\HtmlDomParser;
use function GuzzleHttp\Psr7\str;

/**
 * Class HTML
 * @package Meownime\Parser
 */
class HTML{

    /**
     * @var
     */
    static $html;

    /**
     * Set HTML data from the string
     * @param String $data_html
     * @return void
     */

    static function setHTML(string $data_html){
        self::$html = $data_html;
    }

    /**
     * @param $searchKey
     * @param $variable
     * @param $fallback
     * @return mixed
     */
    private static function isset($searchKey, $variable, $fallback){
        return (array_key_exists($searchKey, $variable) ? $variable[$searchKey] : $fallback);
    }

    /**
     * @param $pattern
     * @return string
     */
    static function setPattern($pattern){
        return implode(" ", $pattern);
    }

    /**
     * Parsing Ongoing page (default sort)
     * @return array|HTML
     */

    static function ongoing(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        foreach ($parse->find(self::setPattern([
                "div[id=page]",
                "div[id=content]",
                "div.container.main-content-area",
                "div.row.full-width",
                "div[id=primary]",
                "main[id=main]"
            ])) as $value){
                foreach ($value->find(self::setPattern([
                    "div.featured-thumb.grid-img.col-md-12"
                ])) as $value){
                    $url = self::isset(0, $value->find("a")->href, "n\a");

                    $output[] = [
                        "url" => $url,
                        "id_anime" => str_replace(Meownime::url, "", $url),
                        "title" => html_entity_decode(self::isset(0, $value->find("a")->title, "n\a")),
                        "rating" => self::isset(0, $value->find("div.postedon")->plaintext, "n\a"),
                        "thumbnail" => self::isset(0, $value->find("img")->src, false)
                    ];
            }
        }
        return $output;
    }

    /**
     * @return array
     */
    static function batch(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        foreach ($parse->find(self::setPattern([
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]"
        ])) as $value){
            foreach ($value->find(self::setPattern([
                "div.featured-thumb.grid-img.col-md-12"
            ])) as $value){
                $url = self::isset(0, $value->find("a")->href, "n\a");

                $output[] = [
                    "url"       => $url,
                    "id_anime"  => str_replace(Meownime::url, "", $url),
                    "title"     => html_entity_decode(self::isset(0, $value->find("a")->title, "n\a")),
                    "rating"    => self::isset(0, $value->find("div.postedon")->plaintext, "n\a"),
                    "thumbnail" => self::isset(0, $value->find("img")->src, false)
                ];
            }
        }
        return $output;
    }

    /**
     * @return array
     */
    static function movie(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        foreach ($parse->find(self::setPattern([
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]"
        ])) as $value){
            foreach ($value->find(self::setPattern([
                "div.featured-thumb.grid-img.col-md-12"
            ])) as $value){
                $url = self::isset(0, $value->find("a")->href, "n\a");

                $output[] = [
                    "url"       => $url,
                    "id_anime"  => str_replace(Meownime::url, "", $url),
                    "title"     => html_entity_decode(self::isset(0, $value->find("a")->title, "n\a")),
                    "rating"    => self::isset(0, $value->find("div.postedon")->plaintext, "n\a"),
                    "thumbnail" => self::isset(0, $value->find("img")->src, false)
                ];
            }
        }
        return $output;
    }

    /**
     * @return boolean|array
     */
    static function searchAnime(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        foreach ($parse->find(self::setPattern([
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]"
        ])) as $value){
            foreach ($value->find(self::setPattern([
                "div.featured-thumb.grid-img.col-md-12"
            ])) as $value){
                if (empty($value->plaintext[0])){
                    return false;
                }
                $url = self::isset(0, $value->find("a")->href, "n\a");

                $output[] = [
                    "url"       => $url,
                    "id_anime"  => str_replace(Meownime::url, "", $url),
                    "title"     => html_entity_decode(self::isset(0, $value->find("a")->title, "n\a")),
                    "rating"    => self::isset(0, $value->find("div.postedon")->plaintext, "n\a"),
                    "thumbnail" => self::isset(0, $value->find("img")->src, false)
                ];
            }
        }
        return $output;
    }

    /**
     * @return array
     */
    static function animeList(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $pattern = [
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]",
            "div.post-inner-content",
            "div.daftarkartun",
            "div[id=abtext]"
        ];

        foreach ($parse->find(self::setPattern($pattern)) as $value){
            foreach ($value->find(self::setPattern(["div.bariskelom"])) as $value){
                foreach ($value->find(self::setPattern(["div.penzbar", "div.jdlbar"])) as $value){
                    $anime = $value->find(self::setPattern(["a.series"]));
                    $output[] = [
                        "title" => html_entity_decode(self::isset(0, $anime->plaintext, "n\a")),
                        "url" => self::isset(0, $anime->href, "n\a"),
                        "id_anime" => str_replace(Meownime::url, "", self::isset(0, $anime->href, "n\a"))
                    ];
                }
            }
        }

        return $output;
    }

    /**
     * @return array
     */
    public static function animeRecommendations(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        $pattern = [
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]",
            "div.post-inner-content",
            "div.entry-content",
            "ol",
            "li",
        ];
        foreach ($parse->find(self::setPattern($pattern)) as $value){
            $titleCategory = [
                "title" => self::isset(0, explode(" &#8211; ", $value->plaintext), "n\a"),
                "category" => self::isset(1, explode(" &#8211; ", $value->plaintext), "n\a"),
            ];
            foreach ($value->find("a") as $value){
                $output[$urutan] = array_merge($titleCategory, [
                    "id_anime" => str_replace(Meownime::url, "", $value->href),
                    "url" => $value->href,
                ]);
            }
            $urutan++;
        }
        return $output;
    }

    /**
     * @return array
     */
    public static function releaseSchedule(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        $pattern = [
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]",
            "div.post-inner-content",
            "div.entry-content",
        ];

        foreach ($parse->find(self::setPattern($pattern)) as $value){
            $days = $value->find(self::setPattern(["h2", "strong"]))->plaintext;
            foreach ($value->find(self::setPattern(["ul"])) as $key => $animes){
                $day = $days[$key];
                foreach ($animes->find(self::setPattern(["li"])) as $anime){
                    $url = self::isset(0, $anime->find("a")->href, "n\a");
                    $output[] = [
                        "day"      => $day,
                        "title"    => html_entity_decode(self::isset(0, $anime->find("a")->plaintext, "n\a")),
                        "time"     => html_entity_decode(str_replace("(-)", "n\a", self::isset(1, $anime->find("strong")->plaintext, "n\a"))),
                        "url"      => $url,
                        "id_anime" => str_replace(Meownime::url, "", $url)
                    ];
                }
            }
        }
        return $output;
    }

    /**
     * @return array
     */
    static function genre(){
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $urutan  = 0;
        foreach ($parse->find(self::setPattern([
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]"
        ])) as $value){
            foreach ($value->find(self::setPattern([
                "div.featured-thumb.grid-img.col-md-12"
            ])) as $value){
                $url = self::isset(0, $value->find("a")->href, "n\a");

                $output[] = [
                    "url"       => $url,
                    "id_anime"  => str_replace(Meownime::url, "", $url),
                    "title"     => html_entity_decode(self::isset(0, $value->find("a")->title, "n\a")),
                    "rating"    => self::isset(0, $value->find("div.postedon")->plaintext, "n\a"),
                    "thumbnail" => self::isset(0, $value->find("img")->src, false)
                ];
            }
        }
        return $output;
    }

    /**
     * @return array
     */
    public static function lookupAnime() : array {
        $parse   = HtmlDomParser::str_get_html(self::$html);
        $output  = [];
        $pattern = [
            "div[id=page]",
            "div[id=content]",
            "div.container.main-content-area",
            "div.row.full-width",
            "div[id=primary]",
            "main[id=main]",
            "div.post-inner-content",
            "div.entry-content",
        ];

        foreach ($parse->find(self::setPattern($pattern)) as $value){
            $output = (function () use ($value){
                $detail = (function () use ($value){
                    $output = [];
                    foreach($value->find(self::setPattern(["ul", "li"])) as $anime){
                        $data = explode(" : ", $anime->plaintext);
                        $key  = strtolower(str_replace(" ", "_", $data[0]));
                        if (array_key_exists(1, $data)){
                            if ($key == "genre"){
                                $output[$key] = explode(", ", strtolower($data[1]));
                            }
                            else{
                                $search = [
                                    "judul_anime", "judul_alternatif", "tipe_anime", "status_anime",
                                    "jumlah_episode", "musim_rilis", "studio_yang_memproduksi", "durasi_per_episode", "skor_di_myanimelist"
                                ];
                                $replace = [
                                    "title", "english_title", "anime_type", "anime_status",
                                    "total_episodes", "release_season", "studio", "duration_per_episode", "rating"
                                ];
                                $key = str_replace($search, $replace, $key);
                                $output[$key] = $data[1];
                            }
                        }
                    }
                    return $output;
                })();
                $synopsis = ["synopsis" => (function () use ($value){
                    $output = [];
                    foreach ($value->find(self::setPattern(["p"])) as $items){
                        if (empty($items->plaintext)){
                            break;
                        }
                        $output[] = html_entity_decode($items->plaintext);
                    }
                    return $output;
                })()];
                $download = ["downloads" => (function () use ($value){
                    $episodes = ["episodes" => (function () use ($value){
                        $output = [];
                        $order  = 0;
                        foreach ($value->find(self::setPattern(["div.dlx"])) as $items){
                            foreach ($items->find(self::setPattern(["div.dl-content-for"])) as $links){
                                $output[] = [
                                    "title" => $items->find("h4.title-dl-anime")->plaintext[$order],
                                    "downloads" => (function() use ($links){
                                        $output = [];
                                        foreach ($links->find(self::setPattern(["div.reso"])) as $item){
                                            $output[] = [
                                                "quality" => $item->find(self::setPattern(["strong"]), 0)->plaintext,
                                                "link" => (function () use ($item){
                                                    $output = [];
                                                    foreach ($item->find(self::setPattern(["div.content-reso", "a"])) as $link){
                                                        $output[] = [
                                                            "platform" => $link->plaintext,
                                                            "url" => $link->href
                                                        ];
                                                    }
                                                    return $output;
                                                })()
                                            ];
                                        }
                                        return $output;
                                    })()
                                ];
                                $order++;
                            }
                        }
                        return $output;
                    })()];
                    $batch = ["batch" => (function () use ($value){
                        $output = [];
                        foreach ($value->find(self::setPattern(["div.dlx", "table.table.table-hover", "tbody"])) as $items){
                            $output[] = [
                                "quality" => $items->find(self::setPattern(["tr", "td", "strong"]), 0)->plaintext,
                                "link" => (function () use ($items){
                                    $output = [];
                                    foreach ($items->find(self::setPattern(["tr", "td", "a"])) as $link){
                                        $output[] = [
                                            "platform" => $link->plaintext,
                                            "url" => $link->href
                                        ];
                                    }
                                    return $output;
                                })()
                            ];
                        }
                        return $output;
                    })()];
                    return array_merge($episodes, $batch);
                })()];
                return array_merge($detail, $synopsis, $download);
            })();
        }

        return $output;
    }
}