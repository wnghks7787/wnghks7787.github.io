<?php
$district = "";

function roll($districts) {
    $random_var = rand(0, 5);

    return $districts[$random_var];
}

function roll_ver2() {
    $random_var = rand(0, 5);

    switch ($random_var) {
        case 0:
            return "서구";
        case 1:
            return "유성구";
        case 2:
            return "중구";
        case 3:
            return "동구";
        case 4:
            return "대덕구";
        default:
            return "ERROR";
    }
}

function print_roll() {
    $gu = roll_ver2();
}
?>

<!doctype html>
<HTML lang="ko">
    <head>
        <title>슬롯 머신!</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width = device-width, initial-scale=1.0">
    </head>
    <body>
        <button type="button" onclick="change_district()">ROLL!!</button>
        <p id="district"></p>
    </body>
</HTML>

<script>
    function change_district() {
        const random_num = Math.floor(Math.random() * 5);
        let district = '';

        switch (random_num) {
            case 0:
                district = '서구';
                break;
            case 1:
                district = '중구';
                break;
            case 2:
                district = '유성구';
                break;
            case 3:
                district = '동구';
                break;
            case 4:
                district = '대덕구';
                break;
            default:
                district = "Error. Please contact developer";
                break;
        }
        document.getElementById("district").innerHTML = district;
    }
</script>