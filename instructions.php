<?php
$monthList = [
    'january' => '1',
    'february' => '2',
    'march' => '3',
    'april' => '4',
    'may' => '5',
    'june' => '6',
    'july' => '7',
    'august' => '8',
    'september' => '9',
    'october' => '10',
    'november' => '11',
    'december' => '12'
];
//date du jour courant
$currentdate = time();
//variable qui récupèrent le jour, le mois et l'année
$day = date('d', $currentdate);
$month = (int)($monthList[$_POST['month']]);
$year = (int)$_POST['year'];

//récupère le premier jour du mois
$first_day = mktime(0, 0, 0, $month, 1, $year);
//récupère le nom du mois
setlocale(LC_TIME, 'fr.UTF-8');
$monthName = strftime('%B', $first_day);
//récupère quel jour tombe le 1er de chaque mois
$day_of_week = date('D', $first_day);
//détermine le nombre de jour qu'il ya dans le mois courant
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
//compte les jours du mois en partant de 1
$day_count = 1;
//représente le numéro du premier jour du mois
$day_num = 1;
//Permet de rendre les cases vides avant le 1er de chaque moi
$blank = null;
switch ($day_of_week) {
    case 'Mon':
        $blank = 0;
        break;
    case 'Tue':
        $blank = 1;
        break;
    case 'Wed':
        $blank = 2;
        break;
    case 'Thu':
        $blank = 3;
        break;
    case 'Fri':
        $blank = 4;
        break;
    case 'Sat':
        $blank = 5;
        break;
    case 'Sun';
        $blank = 6;
        break;
    }
