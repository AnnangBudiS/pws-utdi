<?php
    $celcius = $_POST['celcius'];
    function kelvinCalculate($numb){
        $kelvin = $numb * 273.15;
        return $kelvin;
    }
    function FahrenheitCalculate($numb){
        $fahrenheit = 32 + (1.8 * $numb );
        return $fahrenheit;
    }

    $kelvin = kelvinCalculate($celcius);
    $fahrenheit = FahrenheitCalculate($celcius);
?>

<fieldset>
    <h1>Hasil Konversi Suhu Celcius ke Kelvin dan Fahrenheit</h1>
    <pre>
        Derajat Celcius     :<?php echo $celcius; ?><br>
        Derajat Kelvin      :<?php echo $kelvin; ?><br>
        Derajat Fahrenheit  :<?php echo $fahrenheit; ?>
    </pre>
</fieldset>
