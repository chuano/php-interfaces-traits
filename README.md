# Ejemplo de interfaces y traits en PHP
Ejemplo simple del uso de interfaces y traits con un mismo caso sencillo.

## Caso
Clases que deben contener:

- Tantas propiedades con valores enteros como se desee.
- Un método *sumaTodasPropiedades()* que sume el valor de todas las propiedades de la clase.
- Un método *getTotal()* que devuelva la suma de todas las propiedades de la clase.

## Prueba
```
git clone https://github.com/chuano/php-interfaces-traits.git

composer install

./vendor/bin/phpunit
```