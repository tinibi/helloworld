<?php
    $chiArr = ["Thân", "Dậu", "Tuất", "Hợi", "Tí", "Sửu", "Dần", "Mão", "Thìn", "Tị", "Ngọ", "Mùi"];
    $canArr = ["Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ"];
    $input = $_POST['input'];
    $chi = $chiArr[$input % 12];
    $can = $canArr[$input % 10];
    $ketQua = $can." ".$chi;
    echo("<h1 style='text-align: center'>".$ketQua."</h1>");
?>