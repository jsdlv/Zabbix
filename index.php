<?php
function maxRevenue($treats) {
    // Iegūstam ēdienu skaitu
    $n = count($treats);

    // Izveidojam divdimensionālu masīvu, lai glabātu jau aprēķinātos rezultātus
    // Pirmā dimensija apzīmē sākuma indeksu, otrā - beigu indeksu
    // Sākotnēji visiem elementiem piešķiram vērtību 0
    $dp = array_fill(0, $n, array_fill(0, $n, 0));

    // Iterējam caur visiem iespējamajiem ēdienu virkņu garumiem
    for ($len = 1; $len <= $n; $len++) {
        // Iterējam caur katru iespējamo ēdienu virkņu sākuma indeksu
        for ($i = 0; $i <= $n - $len; $i++) {
            // Aprēķinām beigu indeksu
            $j = $i + $len - 1;
            // Aprēķinām ēdienu vecumu
            $age = $n - ($j - $i);

            // Atrodam maksimālo vērtību, izvēloties ēdienu vai no sākuma vai no beigām
            $dp[$i][$j] = max(
                $treats[$i] * $age + $dp[$i + 1][$j], // Vērtība, ja ņemam ēdienu no sākuma
                $treats[$j] * $age + $dp[$i][$j - 1] // Vērtība, ja ņemam ēdienu no beigām
            );
        }
    }

    // Atgriežam maksimālo ieņēmumu, kas sasniegts, pārdodot visus ēdienus
    return $dp[0][$n - 1];
}

// Lasām ievadi
$N = intval(trim(fgets(STDIN)));
$treats = [];
for ($i = 0; $i < $N; $i++) {
    $treats[] = intval(trim(fgets(STDIN)));
}

// Aprēķinām un izvadam rezultātu
echo maxRevenue($treats) . "\n";