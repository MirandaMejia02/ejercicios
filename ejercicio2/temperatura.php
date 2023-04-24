<?php
class temperaturaAmbiente{
    private $grados;
    public function __construct($grados){
        $this -> grados = $grados;
    }
    public function calcular(){
        if ($this -> grados <= 0){
            echo "<p style='color: blue; font-size: 20px;'>temperatura máximamente fría</p>";

        }
        elseif ($this -> grados <= 30){
            echo "<p style='color: yellow; font-size: 20px;'>temperatura ambiente</p>";
        }
        else{
            echo "<p style='color: red;font-size: 20px; '>temperatura extremadamente caliente</p>";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $temperatura = new temperaturaAmbiente($_POST["grados"]);
    $temperatura->calcular();
}
