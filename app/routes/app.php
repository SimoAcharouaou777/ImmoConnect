<?php

// Inclure l'autoloader de Composer pour charger automatiquement les classes
require_once '../../vendor/autoload.php';

// Importer la classe Router du namespace App\routes
use app\routes\Router;

// Créer une instance du routeur
$router = new Router();

// Définir les routes associées aux méthodes HTTP GET et POST
$router->setRoutes([
    'GET' => [
        '' => ['HomeController', 'index'],
        'date' => ['HomeController', 'displayDate'],
        'hello' =>['AuthController','Hello'],


        'admin/city' =>['CityController','getAllCities'],
        'admin/add/city' =>['CityController','addCity'],
        'admin/delete/city' =>['CityController','deleteCity'],
        'admin/edit/city' =>['CityController','getCity'],

        'admin/category' =>['CategoryController','getAll'],
        'admin/add/category' =>['CategoryController','addCategory'],
        'admin/delete/category' =>['CategoryController','delete'],
        'admin/edit/category' =>['CategoryController','getCategory'],
        
        'admin/users' =>['AuthController','AllUsers'],
        'admin/delete/user' =>['AuthController','deleteUser'],

        'login' => ['RouterAuthrnfication','indexlogin'],
        'register'=>['RouterAuthrnfication','indexregister'],

        'addCity' =>['CityController','Hello'],
        'Profile' => ['AuthController','showUserByEmail'],
        'landing' => ['LandingController','landing'],
        'details' =>['DetailsController','details'],

        'admin/property' =>['PropertyController','getAllProperties'],
        'admin/edit/property' =>['PropertyController','getProperty'],
        'admin/delete/property' =>['PropertyController','deleteProperty'],

    ],
    'POST' => [
        'submit' => ['HomeController', 'save'],
        'edituser' => ['AuthController','updateUser'],
        'user/updtae/profile' => ['AuthController','updateUser'],
        
        'admin/update/category' =>['CategoryController','update'],
        'admin/add/category' =>['CategoryController','add'],
        'admin/update/property' =>['PropertyController','updateProperty'],

        'admin/update/city' =>['CityController','updateCity'],
        'admin/add/city' =>['CityController','add'],
        'Profile' => ['AuthController','showUserByEmail'],
        'landing' => ['LandingController','landing'],
        'details' =>['DetailsController','details'],

        'user/login' =>['AuthController','login'],
        'user/register'=>['AuthController','Register']

    ]
]);

// Vérifier si l'URL est définie dans la requête
if (isset($_GET['url'])) {
    // Nettoyer l'URI en supprimant les barres obliques au début et à la fin
    $uri = trim($_GET['url'], '/');
    
    // Récupérer la méthode HTTP de la requête
    $methode = $_SERVER['REQUEST_METHOD'];

    // Essayer d'obtenir la route associée à la méthode et à l'URI
    try {
        $route = $router->getRoute($methode, $uri);

        // Si une route est trouvée
        if ($route) {
            // Destructurer la route pour obtenir le nom du contrôleur et de la méthode
            list($controllerName, $methodName) = $route;

            // Construire le nom complet de la classe du contrôleur
            $controllerClass = 'app\\controller\\' . ucfirst($controllerName);

            // Instancier le contrôleur
            $controller = new $controllerClass();

            // Si une méthode est spécifiée dans la route
            if ($methodName) {
                // Vérifier si la méthode existe dans le contrôleur
                if (method_exists($controller, $methodName)) {
                    // Appeler la méthode du contrôleur
                    $controller->$methodName();
                } else {
                    // Lancer une exception si la méthode n'est pas trouvée dans le contrôleur
                    throw new Exception('Method not found in controller.');
                }
            } else {
                // Si aucune méthode n'est spécifiée, appeler la méthode par défaut (index)
                $controller->index();
            }
        } else {
            // Lancer une exception si aucune route n'est trouvée
            throw new Exception('Route not found.');
        }
    } catch (Exception $e) {
        // Capturer et afficher les exceptions
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}