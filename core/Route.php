<?php

namespace Core;

/*
    |--------------------------------------------------------------------------
    | Clase Route
    |--------------------------------------------------------------------------
    |
    | Esta clase se encarga de gestionar las rutas de la aplicación, permitiendo
    | definir rutas, establecer prefijos y nombres, y asociar middleware. Las 
    | rutas pueden ser de diferentes métodos HTTP (GET, POST, PUT, DELETE) y
    | también se puede crear un conjunto de rutas RESTful para un controlador.
    |
    | protected static $routes: Almacena las rutas registradas.
    | protected static $prefix: Prefijo para las rutas.
    | protected static $name: Nombre para las rutas.
    | protected static $middleware: Middleware asociado a las rutas.
    |
*/

class Route {
    protected static $routes = [];
    protected static $prefix = '';
    protected static $name = '';
    protected static $middleware = [];

    /**
     * Establece un prefijo para las rutas.
     *
     * @param string $prefix Prefijo a establecer.
     * @return static
     */
    public static function prefix($prefix) {
        self::$prefix = trim($prefix, '/') . '/';
        return new static;
    }

    /**
     * Establece un nombre para las rutas.
     *
     * @param string $name Nombre a establecer.
     * @return static
     */
    public static function name($name) {
        self::$name = trim($name, '.') . '.';
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
     * @param string $method Método HTTP (GET, POST, etc.).
     * @param string $uri URI de la ruta.
     * @param mixed $handler Controlador o función que maneja la ruta.
     * @return static
     */
    public static function add($method, $uri, $handler) {
        $uri = self::$prefix . trim($uri, '/');
        $name = self::$name . str_replace('/', '.', $uri);
        $middlewares = array_map([MiddlewareHandler::class, 'resolve'], self::$middleware);
        self::$routes[$method][$uri] = [
            'handler' => $handler,
            'name' => $name,
            'middleware' => $middlewares
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
     * @param string $controller Nombre del controlador.
     */
    public static function resource($uri, $controller) {
        $baseUri = self::$prefix . trim($uri, '/');
        self::get($baseUri, [$controller, 'index']);
        self::post($baseUri, [$controller, 'store']);
        self::get("$baseUri/create", [$controller, 'create']);
        self::get("$baseUri/{id}", [$controller, 'show']);
        self::get("$baseUri/{id}/edit", [$controller, 'edit']);
        self::put("$baseUri/{id}", [$controller, 'update']);
        self::delete("$baseUri/{id}", [$controller, 'destroy']);
    }

    /**
     * Obtiene todas las rutas registradas.
     *
     * @return array Rutas registradas.
     */
    public static function getRoutes() {
        return self::$routes;
    }

    /**
     * Reinicia los valores de prefijo, nombre y middleware.
     */
    protected static function reset() {
        self::$prefix = '';
        self::$name = '';
        self::$middleware = [];
    }
}
