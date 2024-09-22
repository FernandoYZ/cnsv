<?php

namespace Core;

/**
 * Clase Views
 *
 * Esta clase se encarga de la gestión de vistas en la aplicación, 
 * incluyendo la compilación de archivos de vista, la gestión de caché 
 * y la carga de layouts. Utiliza el compilador para generar el contenido
 * de las vistas y almacena los resultados en archivos de caché para 
 * mejorar el rendimiento.
 *
 * @var Compiler $compiler Instancia del compilador de vistas.
 * @var string $cacheDir Ruta del directorio de caché para las vistas.
 */
class Views {
    protected $compiler;
    protected $cacheDir;

    public function __construct() {
        $this->compiler = new ViewCompiler();
        $this->cacheDir = __DIR__ . '/../storage/cache/Views/';
        
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }

    /**
     * Obtiene y renderiza una vista específica del controlador.
     *
     * @param string $controller Nombre del controlador que contiene la vista.
     * @param string $view Nombre de la vista a renderizar.
     * @param array $data Datos que se pasarán a la vista.
     *
     * Renderiza la vista directamente si está en modo de desarrollo, 
     * de lo contrario, utiliza la caché para mejorar el rendimiento.
     */
    public function getView($controller, $view, $data = []) {
        $viewPath = $this->getViewPath($controller, $view);
        $layoutPath = $this->getViewPath('layouts', 'main');

        if (config('dev') === true) {
            include $viewPath;
            return;
        }

        $cacheKey = md5($viewPath);
        $cacheFile = $this->cacheDir . $cacheKey . '.php';
        $lastModified = max(filemtime($viewPath), filemtime($layoutPath));
        if (file_exists($cacheFile) && filemtime($cacheFile) >= $lastModified) {
            include $cacheFile;
        } else {
            $output = $this->compiler->renderWithLayout($layoutPath, $viewPath, $data);
            file_put_contents($cacheFile, $output);
            include $cacheFile;
        }
    }

    /**
     * Limpia el caché de vistas eliminando todos los archivos de caché.
     *
     * Esto puede ser útil para forzar la regeneración de vistas
     * después de realizar cambios en los archivos de plantilla.
     */
    public function clearCache() {
        $files = glob($this->cacheDir . '*.php');
        foreach ($files as $file) {
            unlink($file);
        }
    }

    /**
     * Obtiene la ruta completa de una vista dada la ruta del controlador 
     * y el nombre de la vista.
     *
     * @param string $controller Nombre del controlador.
     * @param string $view Nombre de la vista.
     * @return string Ruta completa de la vista.
     */
    protected function getViewPath($controller, $view) {
        $controller = str_replace('App\\Http\\Controllers\\', '', $controller);
        $controller = str_replace('\\', '/', $controller);
        return __DIR__ . '/../resources/Views/' . $controller . '/' . $view . '.php';
    }
}
