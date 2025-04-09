    <?php

    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */
    $routes->get('/', 'Home::index');


    $routes->get('/HomePage', 'PageController::Home');
    $routes->get('/AlertsPage', 'PageController::Alerts');
    $routes->get('/TrackerPage', 'PageController::TrackerPage');
    $routes->get('/ProjectsPage', 'PageController::Projects');
    $routes->get('/ContactsPage', 'PageController::Contacts');




    $routes->get('/DICTPage', 'PageController::DICT');
    $routes->get('/DOJPage', 'PageController::DOJ');
    $routes->get('/NBIPage', 'PageController::NBI');
    $routes->get('/NCPPage', 'PageController::NCP');




