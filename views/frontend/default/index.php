
<?php
/* @var $this yii\web\View */
$this->title = 'WYP Sample Application';
$conn=@mysql_connect('localhost','root','');
@mysql_select_db("kouosl");

?>

<script language=JavaScript>function havadurumu(il){ var city = findcity.value; weatherToday.src = "http://www.mgm.gov.tr/sunum/tahmin-show-1.aspx?m=" + city + "&basla=1&bitir=5&rC=FFF&rZ=FFF";}</SCRIPT>

<form>
<select  id="findcity" onChange='havadurumu(this.cityName)'>
    <?php
    $cek=mysql_query("select * from city");
    while ($yaz = mysql_fetch_array($cek)) {
        echo "<option value'".$yaz["cityID"]."'>".$yaz["cityName"]."</option>";

    }
    ?>
    </select>
    </form>
<img id="weatherToday" src="http://www.mgm.gov.tr/sunum/tahmin-show-1.aspx?m=GIRESUN&basla=1&bitir=5&rC=ffffff&rZ=FFF" style="width:260px; height:81px;" alt="GIRESUN" />

</script>