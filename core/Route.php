<?php

namespace Core;

class Route {
    protected static $rutas = [];
    protected static $prefijo = '';
    protected static $nombre = '';
    protected static $middleware = [];

    /**
     * Establece un prefijo para las rutas.
     *
     * @param string $prefijo Prefijo a establecer.
     * @return static
     */
    public static function prefix($prefijo) {
        self::$prefijo = trim($prefijo, '/') . '/';
        return new static;
    }

    /**
     * Establece un nombre para las rutas.
     *
     * @param string $nombre Nombre a establecer.
     * @return static
     */
    public static function name($nombre) {
        self::$nombre = trim($nombre, '.') . '.';
        return new static;
    }

    /**
     * Establece middleware para las rutas.
     *
     * @param mixed $middleware Middleware a establecer.
     * @return static
     */
    public static function middleware($middleware) {
        self::$middleware = is_array($middleware) ? $middleware : [$middleware];
        return new static;
    }

    /**
     * Agrupa rutas para aplicar prefijos y middleware.
     *
     * @param callable $callback Función que define las rutas dentro del grupo.
     */
    public static function group($callback) {
        call_user_func($callback);
        self::reset();
    }

    /**
     * Agrega una ruta con un método HTTP específico.
     *
     * @param string $metodo Método HTTP (GET, POST, etc.).
     * @param string $uri URI de la ruta.
     * @param mixed $handler Controlador o función que maneja la ruta.
     * @return static
     */
    public static function add($metodo, $uri, $handler) {
        $uri = self::$prefijo . trim($uri, '/');
        $nombre = self::$nombre . str_replace('/', '.', $uri);
        // $middlewares = array_map([MiddlewareHandler::class, 'resolve'], self::$middleware);
        self::$rutas[$metodo][$uri] = [
            'handler' => $handler,
            'nombre' => $nombre,
            // 'middleware' => $middlewares
        ];
        return new static;
    }

    /**
     * Agrega una ruta GET.
     *
     * @param string $uri URI de la ruta.
     * @param mixed $handler Controlador o función que maneja la ruta.
     * @return static
     */
    public static function get($uri, $handler) {
        return self::add('GET', $uri, $handler);
    }

    /**
     * Agrega una ruta POST.
     *
     * @param string $uri URI de la ruta.
     * @param mixed $handler Controlador o función que maneja la ruta.
     * @return static
     */
    public static function post($uri, $handler) {
        return self::add('POST', $uri, $handler);
    }

    /**
     * Agrega una ruta PUT.
     *
     * @param string $uri URI de la ruta.
     * @param mixed $handler Controlador o función que maneja la ruta.
     * @return static
     */
    public static function put($uri, $handler) {
        return self::add('PUT', $uri, $handler);
    }

    /**
     * Agrega una ruta DELETE.
     *
     * @param string $uri URI de la ruta.
     * @param mixed $handler Controlador o función que maneja la ruta.
     * @return static
     */
    public static function delete($uri, $handler) {
        return self::add('DELETE', $uri, $handler);
    }

    /**
     * Crea rutas RESTful para un controlador.
     *
     * @param string $uri URI base.
     * @param string $controlador Nombre del controlador.
     */
    public static function resource($uri, $controlador) {
        $baseUri = self::$prefijo . trim($uri, '/');
        self::get($baseUri, [$controlador, 'index']);
        self::post($baseUri, [$controlador, 'store']);
        self::get("$baseUri/create", [$controlador, 'create']);
        self::get("$baseUri/{id}", [$controlador, 'show']);
        self::get("$baseUri/{id}/edit", [$controlador, 'edit']);
        self::put("$baseUri/{id}", [$controlador, 'update']);
        self::delete("$baseUri/{id}", [$controlador, 'destroy']);
    }

    /**
     * Obtiene todas las rutas registradas.
     *
     * @return array Rutas registradas.
     */
    public static function getRoutes() {
        return self::$rutas;
    }

    /**
     * Reinicia los valores de prefijo, nombre y middleware.
     */
    protected static function reset() {
        self::$prefijo = '';
        self::$nombre = '';
        self::$middleware = [];
    }
}
