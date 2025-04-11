<?php
// Definición de la clase Zorro
class Zorro {
    // Atributos públicos de la clase
    public $color;
    public $edad;
    public $peso;
    public $raza;

    // Constructor de la clase: se ejecuta al crear un nuevo objeto
    public function __construct($color, $edad, $peso, $raza) {
        $this->color = $color; // Asigna el color recibido al atributo color
        $this->edad = $edad;   // Asigna la edad recibida al atributo edad
        $this->peso = $peso;   // Asigna el peso recibido al atributo peso
        $this->raza = $raza;   // Asigna la raza recibida al atributo raza
    }

    // Método que simula que el zorro corre
    public function correr() {
        return "El zorro está corriendo.";
    }

    // Método que simula que el zorro duerme
    public function dormir() {
        return "El zorro está durmiendo.";
    }

    // Método que simula que el zorro caza
    public function cazar() {
        return "El zorro está cazando.";
    }

    // Método que devuelve la información del zorro en formato de texto
    public function mostrarInformacion() {
        return "Color: $this->color, Edad: $this->edad años, Peso: $this->peso kg, Raza: $this->raza";
    }
}

// Función principal que simula el punto de entrada del programa
function main() {
    // Se crea una nueva instancia (objeto) de la clase Zorro
    $zorro1 = new Zorro("naranja", 3, 8, "Zorro Rojo");

    // Se imprime en pantalla la información del zorro usando el método mostrarInformacion()
    echo $zorro1->mostrarInformacion();
}

// Llamada a la función principal para ejecutar el programa
main();
?>
