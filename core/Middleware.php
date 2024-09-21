<?php

namespace Core;

/**
 * Clase Middleware
 *
 * Esta clase gestiona el registro y la resolución de middlewares en la aplicación.
 * Permite registrar middlewares por nombre y resolverlos cuando son necesarios.
 */
class Middleware {
    protected static $middleware = []; // Almacena los middlewares registrados.

    /**
     * Registra un middleware en la aplicación.
     *
     * @param string $name Nombre del middleware.
     * @param string $class Clase del middleware.
     */
    public static function register($name, $class) {
        self::$middleware[$name] = $class;
    }

    /**
     * Resuelve un middleware por su nombre.
     *
     * @param string $name Nombre del middleware a resolver.
     * @return object Instancia del middleware.
     * @throws \Exception Si el middleware no se encuentra.
     */
    public static function resolve($name) {
        if (isset(self::$middleware[$name])) {
            return new self::$middleware[$name]();
        }
        throw new \Exception("Middleware {$name} no encontrado");
    }
}
