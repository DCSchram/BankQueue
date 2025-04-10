<?php

$customers = [];
$profit = 0;
$serve_cust = [];

fscanf(STDIN, '%d%d', $N, $T);

for($i=$N; $i>0; $i--){
    fscanf(STDIN, '%d%d', $V, $P);
    $cust = [
            "Value" => $V,
            "Patience" => $P
            ];    
    array_push($customers, $cust);
}

for($i=$T-1; $i>=0; $i--){
    $money = 0;
    foreach($customers as &$cust){
        if($cust["Patience"] >= $i){
            if($cust["Value"] >= $money){
                $money = $cust["Value"];
                $serve_cust = &$cust;
            }
        }
    }
    $serve_cust["Patience"] = -1;
    $profit = $profit + $money;
}
    
fprintf(STDOUT, "%s\n", $profit);
?>