<?php

namespace App;

include 'Ficha.php';

interface Tablero{

    public function medidastableroX() : int; 
    public function medidastableroY() : int; 
    public function limpiar();
    public function poner(int $x, int $y, Ficha $ficha);
    public function sacar(int $x, int $y); 
    public function exiteficha(int $x, int $y); 
    public function devolver(int $x,int $y);
}


class Tablero implements Tablero
{
    protected int $dimX;
    protected int $dimY;

    protected $tablero;


    public function __construct (int $dim_x = 7, int $dim_y = 7) {
        if($dim_x <= 4 && $dim_y <= 4){
            throw new Exception("Tablero de 4x4");
        }

        $this->dimX = $dim_x;
        $this->dimY = $dim_y;

        $this->limpiar();

    }
    
    public function medidastableroX() : int{
        return $this->dimX;
    }

    public function medidastableroY() : int{
        return $this->dimY;
    }

    
    public function limpiar(){
        for($x = 0; $x < $this->medidastableroX(); $x++){
            for($y = 0; $y < $this->medidastableroY(); $y++){
                $this->tablero[$x][$y] = "0";
            }
        }
    } 
    

    public function poner(int $x, int $y, Ficha $ficha){

        if($x > $this->medidastableroX() || $y > $this->medidastableroY()){
            throw new Exception("Ingrese posicion");
        }

        $this->tablero[$x][$y] = $ficha;
    }

    public function ponerUsuario(int $x,Ficha $ficha){

        if($this->exiteficha($x,0)){
            throw new Exception("Columna llena");
        }
        
        for($y = $this->medidastableroY() - 1; $y >= 0; $y--){
            if($this->exiteficha($x,$y) != TRUE){
                $this->poner($x,$y,$ficha);

                break;
            }
        }

    }


    public function sacar(int $x, int $y){

        if($x > $this->medidastableroX() || $y > $this->medidastableroY()){
            throw new Exception("Ingrese posicion");
        }

        $this->tablero[$x][$y] = "0";
    }

    public function sacarUsuario(int $x){

        if($this->exiteficha($x,$this->medidastableroY() - 1) == FALSE){
            throw new Exception("No hay fichas");
        }

        for($y = 0; $y < $this->medidastableroY(); $y++){
            if($this->exiteficha($x,$y) == TRUE){
            
                
                break;
            }
        }
    }

    
    
    public function exiteficha(int $x, int $y){


        if($this->tablero[$x][$y] != "0")
            return TRUE;
        else
            return FALSE;
    }
    
    

    public function devolver(int $x,int $y){

        if($this->tablero[$x][$y] == "0"){
            return $this->tablero[$x];
        }
        else{
            return $this->tablero[$x][$y]->queColorSoy();
        }
    }
    

}
