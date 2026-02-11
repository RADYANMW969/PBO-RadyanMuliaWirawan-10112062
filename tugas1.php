<?php
 class KalkulatorSuhu {
    public $celcius;

    public function Fahrenheit() {
        return ($this->celcius * 9/5) + 32;
    }
    public function Kelvin(){
        return $this->celcius + 273.15;
    }    
 }
 
    $suhu1 = new KalkulatorSuhu();
    $suhu1->celcius = 37;

    echo "<pre>";
    echo "====Kalkulator Suhu====\n";
    echo "Satuan: Celcius (°C)\n";
    echo "------------------------\n";
    echo "SUHU (C)  : " . $suhu1->celcius . " °C\n";
    echo "FAHRENHEIT: " . $suhu1->Fahrenheit() . " °F\n";
    echo "KELVIN    : " . $suhu1->Kelvin() . " K\n";
    echo "========================\n";
    echo "</pre>";