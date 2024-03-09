<?php
class Cuenta 
{
    #atributos
    private $nombre;
    private $numeroCuenta;
    private $tipoInteres;
    private $saldo;

    #atributos de clase
    public function __construct($nombre, $numeroCuenta, $tipoInteres, $saldo)
    {
        $this->nombre = $nombre;
        $this->numeroCuenta = $numeroCuenta;
        $this->tipoInteres = $tipoInteres;
        $this->saldo = $saldo;
    }

    
};
echo 'hola';
?>
