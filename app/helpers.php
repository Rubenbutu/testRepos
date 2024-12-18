<?php
if(!function_exists('CalculeDistance')){
    function CalculeDistance($lat1, $long1,$lat2, $long2){
        $earthRadius=6371;
        // $lat1=48.8566;
        // $long1=2.3522;
        // $lat2=51.5074;
        // $long2=-0.1278;
        // convertir les dégrés en radians
        $lat1=deg2rad($lat1);
        $long1=deg2rad($long1);
        $lat2=deg2rad($lat2);
        $long2=deg2rad($long2);
        // Calculer les différences
        $latDelta=$lat2-$lat1;
        $lonDelta=$long2-$long1;
        // Aplliquer la formule de Haversine
        $a=sin($latDelta/2)* sin($latDelta/2)+ cos($lat1)* cos($lat2)* sin($lonDelta/2)* sin($lonDelta/2);
        $c=2* atan2(sqrt($a),sqrt(1-$a));
        // calculer la disatnce
        $distance=$earthRadius*$c;
        return $distance;
        echo "la distance entre londre et paris est de ". round($distance,2) .'  Kilomètres';
            return $a;
    
    }
}
