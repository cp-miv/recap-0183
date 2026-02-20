<?php

namespace Core;

class Router
{
    /**
     * Recoit l'URL entrée par l'utilisateur (par exemple : /home) et invoke le controller homonime (par exemple : HomeController)
     */
    public function dispatch(string $url): void
    {
        $url = parse_url($url, PHP_URL_PATH);

        $url = trim($url, '/');
        $urlParts = explode('/', $url);

        $className = $urlParts[0];
        $methodName = $urlParts[1];

        $className = ucfirst($className);
        $className = "App\\Controllers\\{$className}Controller";

        $controller = new $className($urlParts);
        $controller->before();
        $controller->$methodName();
        $controller->after();
    }
}
