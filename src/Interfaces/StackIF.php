<?php

namespace Src\Interfaces;

/**
 * Representa un pila de elementos. Una pila es una especialidad de la secuencía.
 * Mantiene una politica de acceso LIFO
 * Last In First Out
 */

interface StackIF
{   
    /**
     * Devuelve el primer elemento de la pila
     * @Pre no puede estar vacio
     * @return devuelve la cima de la pila
     */
    public function getTop();

    /**
     * Incluye un elmento a la pila. Modifica el tamaño de la misma
     * @param elemento que se quiere añadir
     */
    public function push($element);

    /**
     * Elimina un elemento de la pila. Modifica el tamaño de la misma
     * @pre no puede estar vacía
     */
    public function pop();
}