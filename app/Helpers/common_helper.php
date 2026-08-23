<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function display_date($date, $choise = 'default') {
    switch ($choise) {
        case 1:
            $val = date("d-m-Y", strtotime($date));
            break;
        default:
            $val = date("Y-m-d", strtotime($date));
    }
    return $val;
}

function get_pos_list() {
    return array(
        "string:01" => "01-Jammu and Kashmir",
        "string:02" => "02-Himachal Pradesh",
        "string:03" => "03-Punjab",
        "string:04" => "04-Chandigarh",
        "string:05" => "05-Uttarakhand",
        "string:06" => "06-Haryana",
        "string:07" => "07-Delhi",
        "string:08" => "08-Rajasthan",
        "string:09" => "09-Uttar Pradesh",
        "string:10" => "10-Bihar",
        "string:11" => "11-Sikkim",
        "string:12" => "12-Arunachal Pradesh",
        "string:13" => "13-Nagaland",
        "string:14" => "14-Manipur",
        "string:15" => "15-Mizoram",
        "string:16" => "16-Tripura",
        "string:17" => "17-Meghalaya",
        "string:18" => "18-Assam",
        "string:19" => "19-West Bengal",
        "string:20" => "20-Jharkhand",
        "string:21" => "21-Odisha",
        "string:22" => "22-Chhattisgarh",
        "string:23" => "23-Madhya Pradesh",
        "string:24" => "24-Gujarat",
        "string:25" => "25-Daman and Diu",
        "string:26" => "26-Dadra and Nagar Haveli and Daman and Diu",
        "string:27" => "27-Maharashtra",
        "string:29" => "29-Karnataka",
        "string:30" => "30-Goa",
        "string:31" => "31-Lakshadweep",
        "string:32" => "32-Kerala",
        "string:33" => "33-Tamil Nadu",
        "string:34" => "34-Puducherry",
        'string:35' => '35-Andaman and Nicobar Islands',
        "string:36" => "36-Telangana",
        "string:37" => "37-Andhra Pradesh",
        "string:38" => "38-Ladakh",
        "string:96" => "96-Foreign Country",
        "string:97" => "97-Other Territory",
    );
}

function get_pos_list2() {
    return array(
        "01-Jammu and Kashmir" => "01-Jammu and Kashmir",
        "02-Himachal Pradesh" => "02-Himachal Pradesh",
        "03-Punjab" => "03-Punjab",
        "04-Chandigarh" => "04-Chandigarh",
        "05-Uttarakhand" => "05-Uttarakhand",
        "06-Haryana" => "06-Haryana",
        "07-Delhi" => "07-Delhi",
        "08-Rajasthan" => "08-Rajasthan",
        "09-Uttar Pradesh" => "09-Uttar Pradesh",
        "10-Bihar" => "10-Bihar",
        "11-Sikkim" => "11-Sikkim",
        "12-Arunachal Pradesh" => "12-Arunachal Pradesh",
        "13-Nagaland" => "13-Nagaland",
        "14-Manipur" => "14-Manipur",
        "15-Mizoram" => "15-Mizoram",
        "16-Tripura" => "16-Tripura",
        "17-Meghalaya" => "17-Meghalaya",
        "18-Assam" => "18-Assam",
        "19-West Bengal" => "19-West Bengal",
        "20-Jharkhand" => "20-Jharkhand",
        "21-Odisha" => "21-Odisha",
        "22-Chhattisgarh" => "22-Chhattisgarh",
        "23-Madhya Pradesh" => "23-Madhya Pradesh",
        "24-Gujarat" => "24-Gujarat",
        "25-Daman and Diu" => "25-Daman and Diu",
        "26-Dadra and Nagar Haveli and Daman and Diu" => "26-Dadra and Nagar Haveli and Daman and Diu",
        "27-Maharashtra" => "27-Maharashtra",
        "29-Karnataka" => "29-Karnataka",
        "30-Goa" => "30-Goa",
        "31-Lakshadweep" => "31-Lakshadweep",
        "32-Kerala" => "32-Kerala",
        "33-Tamil Nadu" => "33-Tamil Nadu",
        "34-Puducherry" => "34-Puducherry",
        '35-Andaman and Nicobar Islands' => '35-Andaman and Nicobar Islands',
        "36-Telangana" => "36-Telangana",
        "37-Andhra Pradesh" => "37-Andhra Pradesh",
        "38-Ladakh" => "38-Ladakh",
        "96-Foreign Country" => "96-Foreign Country",
        "97-Other Territory" => "97-Other Territory",
    );
}

function get_financial_period() {
    return array(
        date("Y") . '-' . substr(date("Y", strtotime("+1 year")), -2) => date("Y") . '-' . substr(date("Y", strtotime("+1 year")), -2),
        date("Y", strtotime("-1 year")) . '-' . substr(date("Y"), -2) => date("Y", strtotime("-1 year")) . '-' . substr(date("Y"), -2),
        date("Y", strtotime("-2 year")) . '-' . substr(date("Y", strtotime("-1 year")), -2) => date("Y", strtotime("-2 year")) . '-' . substr(date("Y", strtotime("-1 year")), -2),
        date("Y", strtotime("-3 year")) . '-' . substr(date("Y", strtotime("-2 year")), -2) => date("Y", strtotime("-3 year")) . '-' . substr(date("Y", strtotime("-2 year")), -2),
        date("Y", strtotime("-4 year")) . '-' . substr(date("Y", strtotime("-3 year")), -2) => date("Y", strtotime("-4 year")) . '-' . substr(date("Y", strtotime("-3 year")), -2),
        date("Y", strtotime("-5 year")) . '-' . substr(date("Y", strtotime("-4 year")), -2) => date("Y", strtotime("-5 year")) . '-' . substr(date("Y", strtotime("-4 year")), -2),
    );
}

function get_quarter_list(){
    return array(
        'January' => 'January',
        'February' => 'February',
        'March' => 'March',
        'April'=>'April',
        'May'=>'May',
        'Jun'=>'Jun',
        'July'=>'July',
        'August'=>'August',
        'september' => 'September',
        'October' => 'October',
        'November' => 'November',
        'December' => 'December'
    );
}

function get_financial_quarter_list(){
    return array(
        'Quarter 1' => 'Quarter 1',
        'Quarter 2' => 'Quarter 2',
        'Quarter 3' => 'Quarter 3',
        'Quarter 4'=>'Quarter 4',
    );
}

function get_rate_list(){
    return array(
        '0'=>'0',
        '0.1'=>'0.1',
        '0.25'=>'0.25',
        '1'=>'1',
        '1.5'=>'1.5',
        '3'=>'3',
        '5'=>'5',
        '7.5'=>'7.5',
        '12'=>'12',
        '18'=>'18',
        '28'=>'28'
    );
}

function get_rate_name($index_name){
    $rate = array(
        'zper'=>'0',
        'p1per'=>'0.1',
        'p25per'=>'0.25',
        'onePer'=>'1',
        'onep5per'=>'1.5',
        'threePer'=>'3',
        'fivePer'=>'5',
        'sevenP5Per'=>'7.5',
        'twlvePer'=>'12',
        'eitnnPercent'=>'18',
        'twoEightPer'=>'28'
    );

    if ( isset($rate[$index_name]) ) return $rate[$index_name];
    return null;
}
