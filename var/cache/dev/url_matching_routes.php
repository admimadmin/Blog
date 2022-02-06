<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articles/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto_index', '_controller' => 'App\\Controller\\ContactoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contacto/new' => [[['_route' => 'contacto_new', '_controller' => 'App\\Controller\\ContactoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/principal' => [[['_route' => 'principal_index', '_controller' => 'App\\Controller\\PrincipalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/principal/new' => [[['_route' => 'principal_new', '_controller' => 'App\\Controller\\PrincipalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout/logout.html.twig' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sub/category' => [[['_route' => 'sub_category_index', '_controller' => 'App\\Controller\\SubCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sub/category/new' => [[['_route' => 'sub_category_new', '_controller' => 'App\\Controller\\SubCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/users/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/articles/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                    .'|ontacto/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                .')'
                .'|/principal/([^/]++)(?'
                    .'|(*:345)'
                    .'|/edit(*:358)'
                    .'|(*:366)'
                .')'
                .'|/sub/category/([^/]++)(?'
                    .'|(*:400)'
                    .'|/edit(*:413)'
                    .'|(*:421)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:448)'
                    .'|/edit(*:461)'
                    .'|(*:469)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        189 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'contacto_show', '_controller' => 'App\\Controller\\ContactoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'contacto_edit', '_controller' => 'App\\Controller\\ContactoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'contacto_delete', '_controller' => 'App\\Controller\\ContactoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        345 => [[['_route' => 'principal_show', '_controller' => 'App\\Controller\\PrincipalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'principal_edit', '_controller' => 'App\\Controller\\PrincipalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        366 => [[['_route' => 'principal_delete', '_controller' => 'App\\Controller\\PrincipalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        400 => [[['_route' => 'sub_category_show', '_controller' => 'App\\Controller\\SubCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        413 => [[['_route' => 'sub_category_edit', '_controller' => 'App\\Controller\\SubCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        421 => [[['_route' => 'sub_category_delete', '_controller' => 'App\\Controller\\SubCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        448 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
