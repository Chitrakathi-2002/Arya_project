<?php
namespace App\Core;

class View {
    public static function render(string $view, array $data = [], ?string $layout = 'layouts/header'): void {
        extract($data);
        $viewFile = VIEW_PATH . '/' . $view . '.php';
        if (file_exists($viewFile)) {
            require $viewFile;
        }
    }
}
