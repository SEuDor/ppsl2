<?php
/**
 * Created by PhpStorm.
 * Date: 21.11.2015
 * Time: 3:17
 */
use application\extractor\football\FootballExtractor;
use application\extractor\weather\WeatherExtractor;

spl_autoload_extensions('.php');
spl_autoload_register();

$we = new WeatherExtractor();
$fe = new FootballExtractor();
$minValW = $we->smallestTSpread('vfs/weather.dat');
$minValF = $fe->getMinScoreDiff('vfs/football.dat');
echo 'Minimal difference between Max and Min temperatures is in day: ' . $minValW . '<br />';
echo 'Minimal difference between Goals For and Goals Against is in team: ' . $minValF . '<br />';