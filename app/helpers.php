<?php

if (!function_exists('env')) {
    /**
     * Obtiene el valor de una variable de entorno.
     *
     * @param string $key Clave de la variable de entorno.
     * @param mixed $default Valor por defecto si la clave no existe.
     * @return mixed
     */
    function env($key, $default = null) {
        return $_ENV[$key] ?? $default;
    }
}

/**
 * Carga una vista y extrae los datos en variables.
 *
 * @param string $view Nombre de la vista.
 * @param array $data Datos a pasar a la vista.
 * @throws Exception Si la vista no se encuentra.
 */
function view($view, $data = []) {
    extract($data);
    $view = str_replace('.', '/', $view);
    $file = __DIR__ . '/../resources/Views/' . $view . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("Vista no encontrada: $file");
    }
}

if (!function_exists('config')) {
    /**
     * Obtiene el valor de la configuración.
     *
     * @param string $key Clave de la configuración.
     * @return mixed
     */
    function config($key) {
        return $GLOBALS['config'][$key] ?? null;
    }
}

/**
 * Obtiene la ruta a un layout.
 *
 * @param string $path Ruta del layout.
 * @return string Ruta completa al archivo del layout.
 */
function layout($path) {
    $path = str_replace('.', '/', $path);
    $file = realpath(__DIR__ . '/../resources/Views/layouts/' . $path . '.php');
    return $file;
}

/**
 * Genera la URL base de la aplicación.
 *
 * @param string $path Ruta adicional.
 * @return string URL base.
 */
function base_url($path = '') {
    $scheme = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
    return $scheme . '://' . $_SERVER['HTTP_HOST'] . '/' . trim($path, '/');
}

/**
 * Obtiene la ruta a un archivo CSS.
 *
 * @param string $file Nombre del archivo CSS.
 * @return string Ruta al archivo CSS.
 */
function media_css($file = '') {
    return '/css/' . $file;
}

/**
 * Obtiene la ruta a un archivo JS.
 *
 * @param string $file Nombre del archivo JS.
 * @return string Ruta al archivo JS.
 */
function media_js($file = '') {
    return '/js/' . $file;
}

/**
 * Obtiene la ruta a los assets de construcción.
 *
 * @param string $file Nombre del archivo.
 * @return string Ruta al asset.
 */
function assets($file = '') {
    return '/build/assets/' . $file;
}

/**
 * Almacena un contenido en un slot para ser utilizado en vistas.
 *
 * @param string $name Nombre del slot.
 * @param mixed $content Contenido a almacenar.
 */
function slot($name, $content) {
    global $slots;
    $slots[$name] = $content;
}

/**
 * Obtiene el contenido de un slot.
 *
 * @param string $name Nombre del slot.
 * @return mixed Contenido del slot o vacío si no existe.
 */
function get_slot($name) {
    global $slots;
    return $slots[$name] ?? '';
}

/**
 * Redirige a una nueva ubicación (no implementado).
 *
 * @param mixed $wow Parámetro de redirección.
 * @return bool Siempre devuelve verdadero.
 */
function redirect($wow) {
    $wow = [];
    $perrito = true;
    return $perrito;
}
