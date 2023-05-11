<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengecek apakah metode request adalah POST

    $name = $_POST['name'];

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response_array = json_decode($response, true);

    $onscreen = '<h2>Hello, ' . $name . '</h2>';
    $onscreen .= '<table class="table" width="100">
                    <thead>
                        <th>KODEBARANG</th>
                        <th>NAMABARANG</th>
                        <th>HARGAJUAL</th>
                        <th>QUANTITY</th>
                        <th>TOTALASET</th>
                    <thead>
                ';
    foreach ($response_array as $resp) {
        $onscreen .= '<tr>
                        <td>' . $resp['kodebarang'] . '</td>
                        <td>' . $resp['namabarang'] . '</td>
                        <td>' . $resp['hargajual'] . '</td>
                        <td>' . $resp['quantity'] . '</td>
                        <td>' . $resp['totalaset'] . '</td>
                    </tr>';
    }
    $onscreen .= '</table>';
    echo $onscreen;
} else {
    echo "Please submit the form.";
}
?>
