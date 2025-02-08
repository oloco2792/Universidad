<?php

// Abstracción: Definimos una clase abstracta
abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método abstracto
    abstract public function hacerSonido();

    // Método para obtener el nombre del animal
    public function getNombre() {
        return $this->nombre;
    }
}

// Encapsulación: Clase que hereda de Animal
class Perro extends Animal {
    public function hacerSonido() {
        return "Guau!";
    }
}

// Encapsulación: Clase que hereda de Animal
class Gato extends Animal {
    public function hacerSonido() {
        return "Miau!";
    }
}

// Polimorfismo: Función que acepta cualquier objeto de tipo Animal
function hacerSonidoDelAnimal(Animal $animal) {
    echo $animal->getNombre() . " dice: " . $animal->hacerSonido() . "\n";
}

// Creando instancias de Perro y Gato
$miPerro = new Perro("Rex");
$miGato = new Gato("Miau");

// Usando la función polimórfica
hacerSonidoDelAnimal($miPerro);
hacerSonidoDelAnimal($miGato);

/*Explicación de los fundamentos:
1. Abstracción: La clase
Animal
es abstracta y define un método abstracto
hacerSonido(), que debe ser implementado por las clases que heredan de ella.

2. Encapsulación: Las propiedades de las clases
Perro
y
Gato
están protegidas, lo que significa que no pueden ser accedidas directamente desde fuera de la clase.
Se accede a ellas a través de métodos públicos.

3. Herencia: Las clases
Perro
y
Gato
heredan de la clase
Animal, lo que les permite reutilizar su código y definir su propio comportamiento.

4. Polimorfismo: La función
hacerSonidoDelAnimal()
acepta cualquier objeto que sea una instancia de
Animal, lo que permite que se pueda pasar tanto */
?>

