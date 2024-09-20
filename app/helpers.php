<?php

/**
 * Obtiene el valor de una variable de entorno.
 *
 * @param string $key La clave de la variable de entorno.
 * @param mixed $default Valor por defecto si la clave no existe.
 * @return mixed El valor de la variable de entorno o el valor por defecto.
 */
if (!function_exists('env')) {
    function env($key, $default = null) {
        return $_ENV[$key] ?? $default;
    }
}

/**
 * Obtiene el valor de una configuración global.
 *
 * @param string $key La clave de la configuración.
 * @return mixed El valor de la configuración o null si no existe.
 */
function config($key) {
    return $GLOBALS['config'][$key] ?? null;
}

/**
 * Genera la URL base de la aplicación.
 *
 * @param string $path Ruta adicional a agregar a la URL base.
 * @return string La URL completa.
 */
function base_url($path = '') {
    $scheme = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
    return $scheme . '://' . $_SERVER['HTTP_HOST'] . '/' . trim($path, '/');
}

/**
 * Genera la ruta a un archivo CSS en la carpeta pública.
 *
 * @param string $file Nombre del archivo CSS.
 * @return string Ruta completa al archivo CSS.
 */
function media_css($file = '') {
    return '/css/' . $file;
}

/**
 * Genera la ruta a un archivo JavaScript en la carpeta pública.
 *
 * @param string $file Nombre del archivo JavaScript.
 * @return string Ruta completa al archivo JavaScript.
 */
function media_js($file = '') {
    return '/js/' . $file;
}

/**
 * Genera la ruta a un archivo en la carpeta de assets.
 *
 * @param string $file Nombre del archivo.
 * @return string Ruta completa al archivo en la carpeta de assets.
 */
function assets($file = '') {
    return '/build/assets/' . $file;
}
