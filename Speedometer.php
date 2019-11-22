<?php


class Speedometer
{

    const KMTOMILES = 0.621371;

    const MILESTOKM = 1.60934;

    /**
     * @param $km
     * @return float
     */
    public static function convertKmtoMiles($km)
    {
        return round($km * self::KMTOMILES, 2);
    }

    /**
     * @param $miles
     * @return float
     */
    public static function convertMilestoKm($miles)
    {
        return round($miles * self::MILESTOKM, 2);
    }

}