
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Konverter valuta</title>
</head>
<body>

<div>
    <h1>Pretvarač valuta</h1><form name="form" method="post" action=""><br/>
    <p><strong>Unesite vrijednost: </strong></br> <input name="value" type="text" id="value"></p>
    <select name="currency" id="currency">
    <option value="bamToEur">BAM to EUR</option>
    <option value="eurToBam">EUR to BAM</option>
    <option value="hrkToBam">HRK to BAM</option>
    <option value="bamToHrk">BAM to HRK</option>
    </select>
    <p style="margin-bottom:15px"><input type="submit" name="submit" value="Pretvori" class="button "></p></form>

	<?php
	
	    if (isset($_POST['submit'])){
	
        try {
            ini_set('soap.wsdl_cache_enabled', 0);
            ini_set('soap.wsdl_cache_ttl', 0);

            $value = $_POST['value'];
            $currency = $_POST['currency'];
            $sClient = new SoapClient('konverter.wsdl');
            $response = null;

            if ($currency === "bamToEur"){
                $response = $sClient->konverzijaBAMToEUR($value);
            }
            else if ($currency === "eurToBam"){
                $response = $sClient->konverzijaEURToBAM($value);
            }
            else if ($currency === "hrkToBam"){
                $response = $sClient->konverzijaHRKToBAM($value);
            }
            else if ($currency === "bamToHrk"){
                $response = $sClient->konverzijaBAMToHRK($value);
            }
            
            echo '<p><strong>Rezultat:</strong> ' . $response. '</strong></p>';

        } catch(SoapFault $e){
            var_dump('Dogodila se neočekivana pogreška!', $e);
        }
}
		?>
	
</div>
</div>

</body>
</html>