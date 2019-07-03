<?php

class MSlider extends BD {
    
    public function agregarSlider($imagen,$titulo,$informacion){
        try {
            $stmt = $this->conn->prepare("insert into producto(imagen,titulo,informacion) values (:imagen, :titulo, :informacion)");
            $stmt->bindParam(':imagen', $imagen);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':informacion', $informacion);
            return $stmt->execute();
           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}
