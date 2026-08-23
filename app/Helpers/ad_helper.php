<?php


use App\Models\AddModel;

function fetchCurrentAd() {
    $adm = new AddModel();
    $curnt_url = current_url();
    $adLink = $adm->getAd($curnt_url);
    $base_ad_dir = base_url() . '/public/assets/uploads/ads/';

    $ad = '';
    if ( count($adLink) > 0 ) {
        $ad = $adLink[0]['image'];
        $ad = $base_ad_dir . $ad;
    }

    return $ad;
}
