<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/clients' => [[['_route' => 'clients_index', '_controller' => 'App\\Controller\\ClientsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/clients/new' => [[['_route' => 'clients_new', '_controller' => 'App\\Controller\\ClientsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documents' => [[['_route' => 'documents_index', '_controller' => 'App\\Controller\\DocumentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documents/new' => [[['_route' => 'documents_new', '_controller' => 'App\\Controller\\DocumentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etapes' => [[['_route' => 'etapes_index', '_controller' => 'App\\Controller\\EtapesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etapes/new' => [[['_route' => 'etapes_new', '_controller' => 'App\\Controller\\EtapesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projets' => [[['_route' => 'projets_index', '_controller' => 'App\\Controller\\ProjetsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/projets/new' => [[['_route' => 'projets_new', '_controller' => 'App\\Controller\\ProjetsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projets/etapes/new' => [[['_route' => 'projets_etapes_new', '_controller' => 'App\\Controller\\ProjetsEtapesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projets/etat/new' => [[['_route' => 'projets_etat_new', '_controller' => 'App\\Controller\\ProjetsEtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:65)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:101)'
                                .'|router(*:115)'
                                .'|exception(?'
                                    .'|(*:135)'
                                    .'|\\.css(*:148)'
                                .')'
                            .')'
                            .'|(*:158)'
                        .')'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:194)'
                .')'
                .'|/clients/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/documents/([^/]++)(?'
                    .'|(*:275)'
                    .'|/edit(*:288)'
                    .'|(*:296)'
                .')'
                .'|/etapes/([^/]++)(?'
                    .'|(*:324)'
                    .'|/edit(*:337)'
                    .'|(*:345)'
                .')'
                .'|/projets/(?'
                    .'|([^/]++)(?'
                        .'|(*:377)'
                        .'|/edit(*:390)'
                        .'|(*:398)'
                    .')'
                    .'|eta(?'
                        .'|pes(?'
                            .'|(*:419)'
                            .'|/([^/]++)(?'
                                .'|(*:439)'
                                .'|/edit(*:452)'
                                .'|(*:460)'
                            .')'
                        .')'
                        .'|t(?'
                            .'|(*:474)'
                            .'|/([^/]++)(?'
                                .'|(*:494)'
                                .'|/edit(*:507)'
                                .'|(*:515)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        65 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        135 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        223 => [[['_route' => 'clients_show', '_controller' => 'App\\Controller\\ClientsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'clients_edit', '_controller' => 'App\\Controller\\ClientsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'clients_delete', '_controller' => 'App\\Controller\\ClientsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        275 => [[['_route' => 'documents_show', '_controller' => 'App\\Controller\\DocumentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'documents_edit', '_controller' => 'App\\Controller\\DocumentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'documents_delete', '_controller' => 'App\\Controller\\DocumentsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        324 => [[['_route' => 'etapes_show', '_controller' => 'App\\Controller\\EtapesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'etapes_edit', '_controller' => 'App\\Controller\\EtapesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        345 => [[['_route' => 'etapes_delete', '_controller' => 'App\\Controller\\EtapesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        377 => [[['_route' => 'projets_show', '_controller' => 'App\\Controller\\ProjetsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'projets_edit', '_controller' => 'App\\Controller\\ProjetsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'projets_delete', '_controller' => 'App\\Controller\\ProjetsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        419 => [[['_route' => 'projets_etapes_index', '_controller' => 'App\\Controller\\ProjetsEtapesController::index'], [], ['GET' => 0], null, true, false, null]],
        439 => [[['_route' => 'projets_etapes_show', '_controller' => 'App\\Controller\\ProjetsEtapesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'projets_etapes_edit', '_controller' => 'App\\Controller\\ProjetsEtapesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [[['_route' => 'projets_etapes_delete', '_controller' => 'App\\Controller\\ProjetsEtapesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        474 => [[['_route' => 'projets_etat_index', '_controller' => 'App\\Controller\\ProjetsEtatController::index'], [], ['GET' => 0], null, true, false, null]],
        494 => [[['_route' => 'projets_etat_show', '_controller' => 'App\\Controller\\ProjetsEtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'projets_etat_edit', '_controller' => 'App\\Controller\\ProjetsEtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        515 => [
            [['_route' => 'projets_etat_delete', '_controller' => 'App\\Controller\\ProjetsEtatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
