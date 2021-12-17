<h2>DEKRIPSI ROT13</h2>
<form action="" method="post">
    <table class="form">
        <tr>
            <td>Chipertext<br /><textarea rows="3" cols="50" name="chiper"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="GO" /></td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['chiper'])) {
        $dekrip = d_rot13($_POST['chiper']);
        echo "
        <h3>Chipertext</h3><p><textarea rows=\"3\" cols=\"50\" >$_POST[chiper]</textarea></p>
        <h3>Plaintext</h3>
        <p><textarea rows=\"3\" cols=\"50\">$dekrip</textarea></p>
        ";
    } else {
        echo "<span style=\"color:#f00;\">Masukkan Chipertext...
        </span>";
    }
}
?>