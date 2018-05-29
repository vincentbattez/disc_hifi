<?php

//POUR APPELLER LA FONCTION
//echo AgoTimeFormat::makeAgo(strtotime($linelast['dateEcrit']));

//namespace Helpers;

class AgoTimeFormat {
    static function convert_datetime($str) {
            list($date, $time) = explode(' ', $str);
            list($year, $month, $day) = explode('-', $date);
            list($hour, $minute, $second) = explode(':', $time);
            $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
            return $timestamp;
    }
    static function makeAgo($timestamp){
            $difference = time() - $timestamp;
            $periods = array("sec", "min", "heure", "jour", "semaine", "mois", "année", "décénie");
            $lengths = array("60","60","24","7","4.35","12","10");
            for($j = 0; $difference >= $lengths[$j]; $j++)
                $difference /= $lengths[$j];
                $difference = round($difference);
            if($difference != 1) $periods[$j].= "s";
                $text = "il y a $difference $periods[$j]";
                return $text;
    }
}

?>
