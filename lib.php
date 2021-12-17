<?php
function get_index($str)
{
    $d =
        array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $i = 0;
    foreach ($d as $dd) {
        if ($dd == $str) {
            return $i;
            break;
        }
        $i++;
    }
}
function get_str($i)
{
    $d =
        array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    return $d[$i];
}
function balik($index)
{
    $d =
        array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    return $d[$index];
}
function rot13($plain)
{
    $kt = strtoupper($plain);
    $kt = str_replace(" ", "", $kt);
    $kunci = 13;
    $data = str_split($kt);
    $i = 0;
    foreach ($data as $aaa) {
        $ee = get_index($aaa);
        $h = $ee + $kunci;
        if ($h >= 26) {
            $ss[$i] = ($ee + 13) - 26;
        } else {
            $ss[$i] = $ee + $kunci;
        }
        $i++;
    }
    $i = 0;
    foreach ($ss as $ccc) {
        $gs[$i] = balik($ccc);
        $i++;
    }
    $rot13 = implode($gs);
    return $rot13;
}
function d_rot13($chiper)
{
    $kt = strtoupper($chiper);
    $kt = str_replace(" ", "", $kt);
    $kunci = 13;
    $data = str_split($kt);
    $i = 0;
    foreach ($data as $aaa) {
        $ee = get_index($aaa);
        $dd = $ee + 26 - 13;
        if ($dd >= 26) {
            $gg = $dd - 26;
            //echo"$gg ";
            $ss[$i] = get_str($gg);
        } else {
            //echo"$dd ";
            $ss[$i] = get_str($dd);
        }
        $i++;
    }
    $ffg = implode($ss);
    return $ffg;
}
function get_navigasi($modul)
{
    $nav = "<ul>";
    $nav .= "<li ";
    if ($modul == "") {
        $nav .= " class=\"aktiv\"";
    }
    $nav .= "><a href=\" ./\" title=\"\">Home</a></li>";
    $nav .= "<li ";
    if ($modul == " rot13") {
        $nav .= "class=\" aktiv\"";
    }
    $nav .= "><a href=\" ?m=rot13\" title=\"\">Rot13</a></li>";
    $nav .= "</ul>";
    return $nav;
}
?>