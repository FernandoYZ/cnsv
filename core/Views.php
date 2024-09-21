<?php

namespace Core;

/**
 * Clase Views
 *
 * Esta clase se encarga de la gestión de vistas, incluyendo la compilación,
 * la caché y la carga de layouts.
 */
class Views {
    protected $compiler;
    protected $cacheDir;

    /**
     * Constructor de la clase Views.
     * Inicializa el compilador de vistas y el directorio de caché.
     */
    public function __construct() {
        $this->compiler = new ViewCompiler();
        $this->cacheDir = __DIR__ . '/../storage/cache/Views/';
        
        // Crea el directorio de caché si no existe.
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }

    /**
     * Obtiene y renderiza una vista específica.
     *
     * @param string $controller Nombre del controlador.
     * @param string $view Nombre de la vista a renderizar.
     * @param array $data Datos a pasar a la vista.
     */
    public function getView($controller, $view, $data = []) {
        $viewPath = $this->getViewPath($controller, $view);
        $layoutPath = $this->getViewPath('layouts', 'main');

        $cacheKey = md5($viewPath);
        $cacheFile = $this->cacheDir . $cacheKey . '.php';
        $lastModified = filemtime($viewPath);

        if (file_exists($cacheFile) && filemtime($cacheFile) >= $lastModified) {
            include $cacheFile;
        } else {
            $output = $this->compiler->renderWithLayout($layoutPath, $viewPath, $data);
            file_put_contents($cacheFile, $output);
            include $cacheFile;
        }
    }

    /**
     * Limpia el caché de vistas eliminando archivos de caché.
     */
    public function clearCache() {
        $files = glob($this->cacheDir . '*.php');
        foreach ($files as $file) {
            unlink($file);
        }
    }

    /**
     * Obtiene la ruta de una vista dada la ruta del controlador y el nombre de la vista.
     *
     * @param string $controller Nombre del controlador.
     * @param string $view Nombre de la vista.
     * @return string Ruta de la vista.
     */
    protected function getViewPath($controller, $view) {
        $controller = str_replace('App\\Http\\Controllers\\', '', $controller);
        $controller = str_replace('\\', '/', $controller);
        return __DIR__ . '/../resources/Views/' . $controller . '/' . $view . '.php';
    }
}
