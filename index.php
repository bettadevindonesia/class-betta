<?php

define('NAMA', 'Toni');
define('KELAS', '5 SD');
define('JARAK', 3.5);
define('MINUM', 2);


function hitungPerjalanan ( $hari, $berhenti = 2, $is_pp = true ) {

    if (is_int($hari)) {

        $hari_terakhir = $hari - 1; 
        $no = 1;
        $jarak_tempuh = [];

        for ($i=0; $i < $hari; $i++) {

            if ($i < $hari_terakhir && $is_pp == true ) {

                echo "Hari : ". $no ." ". NAMA . " adalah siswa kelas ". KELAS ." menempuh perjalanan PP sejauh " . JARAK * $berhenti . " dan " . NAMA . " berhenti sebanyak ".(MINUM * $berhenti)." <br>";

                array_push($jarak_tempuh, JARAK * $berhenti);

            } else {

                $berhenti = $berhenti - 1;

                echo "Hari : ". $no ." ". NAMA . " adalah siswa kelas ". KELAS ." menempuh perjalanan tidak PP sejauh " . JARAK * $berhenti . " dan " . NAMA . " berhenti sebanyak ". MINUM ." <br>";

                array_push($jarak_tempuh, JARAK * $berhenti);
            }

            $no++;

        }

    }

    $total_jarak_tempuh = array_sum($jarak_tempuh);
    echo "Total jarak yang ditempuh " . NAMA . " selama " . $hari . " hari, sejauh : " . $total_jarak_tempuh;

}

hitungPerjalanan(3);

?>