<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    private array $routes = [];

    public function add($method, $uri, $controller)
    {
//      $this->routes = compact($method, $uri, $controller); // suprotno od exrtract, extract radi destrukciju
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method,
            "middleware" => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add("GET", $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add("POST", $uri, $controller);

    }

    public function delete(string $uri, string $controller)
    {
        return $this->add("DELETE", $uri, $controller);

    }

    public function put(string $uri, string $controller)
    {
        return $this->add("PUT", $uri, $controller);

    }

    public function patch(string $uri, string $controller)
    {
        return $this->add("PATCH", $uri, $controller);
    }

    public function previusUrl()
    {
        return $_SERVER["HTTP_REFERER"];
    }

    public function route($uri, $method)
    {
        $method = strtoupper($method);
        foreach ($this->routes as $route) {
            if ($route["uri"] === $uri["path"] && $route["method"] === $method) {
                Middleware::resolve($route["middleware"]);
                require_once BASE_PATH . "controllers/" . $route["controller"];
                exit();
            }
        }

        foreach ($this->routes as $route) {
            if (str_contains($route["uri"], ":") && $route["method"] === $method) {
                // Replace :param with a regular expression that matches any value
                $routePattern = preg_replace('/(:\w+)/', '(\w+)', $route["uri"]);
                $routePattern = str_replace('/', '\/', $routePattern); // Escape slashes
                // Add start and end anchors to the pattern
                $pattern = "/^{$routePattern}$/";
                // Check if the request URI matches the route pattern
                if (preg_match($pattern, $uri["path"], $matches)) {
                    // If the route has parameters, extract them
                    // Note: In this case, we don't have parameters for '/user/info'
                    if (str_contains($route["uri"], ':')) {
                        // Remove the first element which contains the full match
                        array_shift($matches);
                        // Get the parameter names from the route
                        preg_match_all('/:(\w+)/', $route["uri"], $paramNames);
                        // Combine parameter names with their values into an associative array
                        $params = array_combine($paramNames[1], $matches);
                    } else {
                        $params = [];
                    }
                    // Call the corresponding handler with parameters
//                    call_user_func($handler, $params);
                    Middleware::resolve($route["middleware"]);
                    require_once BASE_PATH . "controllers/" . $route["controller"];
                    exit(); // Stop further processing
                }
            }
        }

        $this->abort();
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]["middleware"] = $key;
        return $this;
    }


    public function abort($statusCode = Response::NOT_FOUND)
    {
        view("$statusCode", ["heading" => "Error",
            "heroImage" => "404_error.jpg",
            "heroTitle" => ""
        ]);
        die();
    }

}