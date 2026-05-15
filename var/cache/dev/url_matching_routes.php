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
        '/admin/hebergement/reservations' => [[['_route' => 'admin_hebergement_reservations', '_controller' => 'App\\Controller\\Admin\\AdminReservationController::index'], null, null, null, false, false, null]],
        '/admin/transports/reservations' => [[['_route' => 'admin_transport_reservation_index', '_controller' => 'App\\Controller\\Admin\\AdminTransportReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/map/location-picker' => [[['_route' => 'admin_location_picker', '_controller' => 'App\\Controller\\Admin\\MapPickerController::locationPicker'], null, null, null, false, false, null]],
        '/admin/chatbot' => [[['_route' => 'admin_chatbot', '_controller' => 'App\\Controller\\AdminChatbotController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/chatbot/ask' => [[['_route' => 'admin_chatbot_ask', '_controller' => 'App\\Controller\\AdminChatbotController::ask'], null, ['POST' => 0], null, false, false, null]],
        '/admin/chatbot/status' => [[['_route' => 'admin_chatbot_status', '_controller' => 'App\\Controller\\AdminChatbotController::status'], null, ['GET' => 0], null, false, false, null]],
        '/admin/chatbot/export' => [[['_route' => 'admin_chatbot_export', '_controller' => 'App\\Controller\\AdminChatbotController::export'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users/export' => [[['_route' => 'admin_users_export', '_controller' => 'App\\Controller\\AdminController::exportUsers'], null, null, null, false, false, null]],
        '/admin/users/search' => [[['_route' => 'admin_users_search', '_controller' => 'App\\Controller\\AdminController::searchUsers'], null, null, null, false, false, null]],
        '/admin/user/form/add' => [[['_route' => 'admin_user_form_add', '_controller' => 'App\\Controller\\AdminController::getAddForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/form/add/submit' => [[['_route' => 'admin_user_form_add_submit', '_controller' => 'App\\Controller\\AdminController::submitAddForm'], null, ['POST' => 0], null, false, false, null]],
        '/admin/publications' => [[['_route' => 'admin_publications', '_controller' => 'App\\Controller\\AdminPublicationController::index'], null, null, null, false, false, null]],
        '/admin/publications/create' => [[['_route' => 'admin_publication_create', '_controller' => 'App\\Controller\\AdminPublicationController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/publications/signalements' => [[['_route' => 'admin_publication_signalements', '_controller' => 'App\\Controller\\AdminPublicationController::signalements'], null, ['GET' => 0], null, false, false, null]],
        '/admin/publications/ai-optimize-comments' => [[['_route' => 'admin_publication_ai_optimize_comments', '_controller' => 'App\\Controller\\AdminPublicationController::aiOptimizeComments'], null, ['POST' => 0], null, false, false, null]],
        '/admin/publications/statistiques' => [[['_route' => 'admin_publication_statistics', '_controller' => 'App\\Controller\\AdminPublicationStatisticsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reclamations/export' => [[['_route' => 'admin_reclamations_export', '_controller' => 'App\\Controller\\AdminReclamationController::export'], null, ['GET' => 0], null, false, false, null]],
        '/admin/whatsapp-sessions' => [[['_route' => 'admin_whatsapp_sessions', '_controller' => 'App\\Controller\\AdminWhatsAppSessionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\AdminReservationController::index'], null, null, null, true, false, null]],
        '/api/airports/nearby' => [[['_route' => 'api_airports_nearby', '_controller' => 'App\\Controller\\ApiController::getNearbyAirports'], null, ['POST' => 0], null, false, false, null]],
        '/api/airports/choices' => [[['_route' => 'api_airports_choices', '_controller' => 'App\\Controller\\ApiTransportController::airportChoices'], null, ['GET' => 0], null, false, false, null]],
        '/api/validate-airport' => [[['_route' => 'api_validate_airport', '_controller' => 'App\\Controller\\ApiTransportController::validateAirport'], null, ['POST' => 0], null, false, false, null]],
        '/api/detect-airports' => [[['_route' => 'api_detect_airports', '_controller' => 'App\\Controller\\ApiTransportController::detectAirports'], null, ['POST' => 0], null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'admin_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, true, false, null]],
        '/admin/categories-hebergement' => [[['_route' => 'admin_categories_hebergement', '_controller' => 'App\\Controller\\CategorieHebergementController::index'], null, null, null, false, false, null]],
        '/admin/hebergements/categories' => [[['_route' => 'admin_hebergements_categories', '_controller' => 'App\\Controller\\CategorieHebergementController::index'], null, null, null, false, false, null]],
        '/admin/categories-hebergement/create' => [[['_route' => 'admin_categorie_hebergement_create', '_controller' => 'App\\Controller\\CategorieHebergementController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chatbot/recommander' => [[['_route' => 'app_chatbot_recommander', '_controller' => 'App\\Controller\\ChatbotController::recommander'], null, ['POST' => 0], null, false, false, null]],
        '/test-gemini' => [[['_route' => 'test_gemini', '_controller' => 'App\\Controller\\ChatbotController::testGemini'], null, null, null, false, false, null]],
        '/api/convert-currency' => [[['_route' => 'api_convert_currency', '_controller' => 'App\\Controller\\CurrencyController::convertCurrency'], null, ['POST' => 0], null, false, false, null]],
        '/check-email' => [[['_route' => 'check_email', '_controller' => 'App\\Controller\\EmailVerificationController::checkEmail'], null, ['POST' => 0], null, false, false, null]],
        '/verify-email' => [[['_route' => 'verify_email_page', '_controller' => 'App\\Controller\\EmailVerificationController::verifyEmailPage'], null, null, null, false, false, null]],
        '/send-code' => [[['_route' => 'send_code', '_controller' => 'App\\Controller\\EmailVerificationController::sendCode'], null, ['POST' => 0], null, false, false, null]],
        '/verify-code' => [[['_route' => 'verify_code', '_controller' => 'App\\Controller\\EmailVerificationController::verifyCode'], null, ['POST' => 0], null, false, false, null]],
        '/admin/excursion' => [[['_route' => 'admin_excursion_index', '_controller' => 'App\\Controller\\ExcursionController::index'], null, null, null, true, false, null]],
        '/admin/excursion/search' => [[['_route' => 'admin_excursion_search', '_controller' => 'App\\Controller\\ExcursionController::search'], null, null, null, false, false, null]],
        '/face-login' => [[['_route' => 'face_login', '_controller' => 'App\\Controller\\FaceLoginController::faceLogin'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password/send-code' => [[['_route' => 'forgot_password_send_code', '_controller' => 'App\\Controller\\ForgotPasswordController::sendCode'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password/verify-code' => [[['_route' => 'forgot_password_verify_code', '_controller' => 'App\\Controller\\ForgotPasswordController::verifyCode'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password/reset' => [[['_route' => 'forgot_password_reset', '_controller' => 'App\\Controller\\ForgotPasswordController::reset'], null, ['POST' => 0], null, false, false, null]],
        '/smart-login' => [[['_route' => 'smart_login', '_controller' => 'App\\Controller\\FraudDetectionController::smartLogin'], null, ['POST' => 0], null, false, false, null]],
        '/hebergements' => [[['_route' => 'app_hebergements', '_controller' => 'App\\Controller\\FrontOfficeController::hebergements'], null, ['GET' => 0], null, false, false, null]],
        '/transports' => [[['_route' => 'app_transports', '_controller' => 'App\\Controller\\FrontOfficeController::transports'], null, ['GET' => 0], null, false, false, null]],
        '/transports/map-data' => [[['_route' => 'app_transports_map_data', '_controller' => 'App\\Controller\\FrontOfficeController::transportsMapData'], null, ['GET' => 0], null, false, false, null]],
        '/transports/weather-intel' => [[['_route' => 'app_transports_weather_intel', '_controller' => 'App\\Controller\\FrontOfficeController::transportsWeatherIntel'], null, ['GET' => 0], null, false, false, null]],
        '/api/optimize-route' => [[['_route' => 'api_optimize_route', '_controller' => 'App\\Controller\\FrontOfficeController::optimizeRoute'], null, ['POST' => 0], null, false, false, null]],
        '/transports/synchronisation-intelligente' => [[['_route' => 'app_front_sjs', '_controller' => 'App\\Controller\\FrontOfficeController::smartJourneySync'], null, null, null, false, false, null]],
        '/ai/hebergement/recommend' => [[['_route' => 'ai_hebergement_recommend', '_controller' => 'App\\Controller\\HebergementAiController::recommend'], null, ['POST' => 0], null, false, false, null]],
        '/api/hebergements/localisations' => [[['_route' => 'api_hebergements_localisations', '_controller' => 'App\\Controller\\HebergementApiController::localisations'], null, ['GET' => 0], null, false, false, null]],
        '/admin/hebergements' => [[['_route' => 'admin_hebergements', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, false, false, null]],
        '/admin/hebergements/create' => [[['_route' => 'admin_hebergement_create', '_controller' => 'App\\Controller\\HebergementController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/hebergements/ai/analyze' => [[['_route' => 'admin_hebergement_ai_analyze', '_controller' => 'App\\Controller\\HebergementController::analyze'], null, ['POST' => 0], null, false, false, null]],
        '/ai/rapport' => [[['_route' => 'ai_rapport_qp', '_controller' => 'App\\Controller\\HebergementQpAiController::rapport'], null, ['GET' => 0], null, false, false, null]],
        '/ai/rapport-qp-analyze' => [[['_route' => 'ai_rapport_qp_analyze', '_controller' => 'App\\Controller\\HebergementQpAiController::analyze'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_root', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null],
        ],
        '/loisirs' => [[['_route' => 'app_loisirs', '_controller' => 'App\\Controller\\LoisirController::index'], null, null, null, false, false, null]],
        '/admin/excursion/new' => [[['_route' => 'excursion_new', '_controller' => 'App\\Controller\\LoisirController::new'], null, null, null, false, false, null]],
        '/mes-favoris' => [[['_route' => 'app_mes_favoris', '_controller' => 'App\\Controller\\LoisirController::mesFavoris'], null, null, null, false, false, null]],
        '/loisirs/search' => [[['_route' => 'app_loisirs_search', '_controller' => 'App\\Controller\\LoisirController::search'], null, null, null, false, false, null]],
        '/map/nearby' => [[['_route' => 'app_map_nearby', '_controller' => 'App\\Controller\\MapController::nearby'], null, null, null, false, false, null]],
        '/map/geocode' => [[['_route' => 'app_map_geocode', '_controller' => 'App\\Controller\\MapController::geocode'], null, null, null, false, false, null]],
        '/mes-reservations' => [[['_route' => 'app_mes_reservations', '_controller' => 'App\\Controller\\MesReservationsController::index'], null, null, null, false, false, null]],
        '/mes-trajets' => [[['_route' => 'app_mes_reservations_transports', '_controller' => 'App\\Controller\\MesReservationsController::transports'], null, null, null, false, false, null]],
        '/mes-hebergements' => [[['_route' => 'app_mes_reservations_hebergements', '_controller' => 'App\\Controller\\MesReservationsController::hebergements'], null, null, null, false, false, null]],
        '/notifications/read' => [[['_route' => 'notifications_read', '_controller' => 'App\\Controller\\NotificationController::markAsRead'], null, ['POST' => 0], null, false, false, null]],
        '/paiement/success' => [[['_route' => 'app_paiement_success', '_controller' => 'App\\Controller\\PaiementController::success'], null, null, null, false, false, null]],
        '/paiement/cancel' => [[['_route' => 'app_paiement_cancel', '_controller' => 'App\\Controller\\PaiementController::cancel'], null, null, null, false, false, null]],
        '/api/generate-password' => [[['_route' => 'api_generate_password', '_controller' => 'App\\Controller\\PasswordGeneratorController::generate'], null, ['POST' => 0], null, false, false, null]],
        '/posts' => [
            [['_route' => 'app_posts', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'app_post_index_slash', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/posts/gestion-posts' => [[['_route' => 'app_gestion_posts', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/posts/api/translate' => [[['_route' => 'api_translate', '_controller' => 'App\\Controller\\PostController::translate'], null, ['POST' => 0], null, false, false, null]],
        '/posts/api/news' => [[['_route' => 'api_news', '_controller' => 'App\\Controller\\PostController::getNews'], null, ['GET' => 0], null, false, false, null]],
        '/profil/image' => [[['_route' => 'profile_image', '_controller' => 'App\\Controller\\ProfileController::changeImage'], null, ['POST' => 0], null, false, false, null]],
        '/mes-promos' => [[['_route' => 'app_my_promos', '_controller' => 'App\\Controller\\PromoCodeController::myPromos'], null, null, null, false, false, null]],
        '/apply-promo' => [[['_route' => 'app_apply_promo', '_controller' => 'App\\Controller\\PromoCodeController::applyPromo'], null, ['POST' => 0], null, false, false, null]],
        '/generate-promo' => [[['_route' => 'app_generate_promo', '_controller' => 'App\\Controller\\PromoCodeController::generatePromo'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'quiz_page', '_controller' => 'App\\Controller\\QuizController::index'], null, null, null, false, false, null]],
        '/quiz/submit' => [[['_route' => 'quiz_submit', '_controller' => 'App\\Controller\\QuizController::submit'], null, ['POST' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/articles' => [[['_route' => 'reclamation_articles', '_controller' => 'App\\Controller\\ReclamationController::getArticles'], null, null, null, false, false, null]],
        '/reclamation/soumettre' => [[['_route' => 'reclamation_soumettre', '_controller' => 'App\\Controller\\ReclamationController::soumettre'], null, ['POST' => 0], null, false, false, null]],
        '/reclamation/mes-reclamations' => [[['_route' => 'reclamation_mes', '_controller' => 'App\\Controller\\ReclamationController::mesReclamations'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/mes-reclamations-page' => [[['_route' => 'reclamation_mes_page', '_controller' => 'App\\Controller\\ReclamationController::mesReclamationsPage'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/admin/reclamations' => [[['_route' => 'admin_reclamations', '_controller' => 'App\\Controller\\ReclamationController::adminIndex'], null, null, null, false, false, null]],
        '/recommandations' => [[['_route' => 'app_recommandations', '_controller' => 'App\\Controller\\RecommandationController::index'], null, null, null, false, false, null]],
        '/recommandations/ajax' => [[['_route' => 'app_recommandations_ajax', '_controller' => 'App\\Controller\\RecommandationController::ajax'], null, null, null, false, false, null]],
        '/recommandations/reset-cache' => [[['_route' => 'app_recommandations_reset_cache', '_controller' => 'App\\Controller\\RecommandationController::resetCache'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/validate-register' => [[['_route' => 'app_validate_register', '_controller' => 'App\\Controller\\RegistrationController::validateRegister'], null, ['POST' => 0], null, false, false, null]],
        '/prix-intelligent' => [[['_route' => 'prix_intelligent', '_controller' => 'App\\Controller\\ReservationController::prixIntelligent'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/sjs/synchronize' => [[['_route' => 'api_sjs_synchronize', '_controller' => 'App\\Controller\\SmartJourneyController::synchronize'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/transport-dashboard' => [[['_route' => 'admin_transport_dashboard', '_controller' => 'App\\Controller\\TransportController::dashboard'], null, null, null, false, false, null]],
        '/admin/transports' => [[['_route' => 'admin_transports', '_controller' => 'App\\Controller\\TransportController::transports'], null, null, null, false, false, null]],
        '/admin/transports/create' => [[['_route' => 'admin_transport_create', '_controller' => 'App\\Controller\\TransportController::createTransport'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/api/extract-airports' => [[['_route' => 'api_extract_airports', '_controller' => 'App\\Controller\\TransportController::extractAirports'], null, ['POST' => 0], null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateurs', '_controller' => 'App\\Controller\\TransportController::utilisateurs'], null, null, null, false, false, null]],
        '/admin/hebergements-legacy' => [[['_route' => 'admin_hebergements_legacy', '_controller' => 'App\\Controller\\TransportController::hebergements'], null, null, null, false, false, null]],
        '/admin/debug/upload' => [[['_route' => 'debug_upload', '_controller' => 'App\\Controller\\TransportController::debugUpload'], null, null, null, false, false, null]],
        '/admin/loisirs' => [[['_route' => 'admin_loisirs', '_controller' => 'App\\Controller\\TransportController::loisirs'], null, null, null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_posts', '_controller' => 'App\\Controller\\TransportController::posts'], null, null, null, false, false, null]],
        '/admin/gestion-posts' => [[['_route' => 'admin_gestion_posts', '_controller' => 'App\\Controller\\TransportController::posts'], null, null, null, false, false, null]],
        '/webhook/whatsapp' => [[['_route' => 'whatsapp_webhook', '_controller' => 'App\\Controller\\WhatsAppController::receive'], null, ['POST' => 0], null, false, false, null]],
        '/api/wheel/spin' => [[['_route' => 'api_wheel_spin', '_controller' => 'App\\Controller\\WheelController::spin'], null, ['POST' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profile/modifier' => [[['_route' => 'profile_update', '_controller' => 'App\\Controller\\ProfileController::update'], null, ['POST' => 0], null, false, false, null]],
        '/profile/changer-mot-de-passe' => [[['_route' => 'profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, ['POST' => 0], null, false, false, null]],
        '/profile/supprimer' => [[['_route' => 'profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/profile/upload-photo' => [[['_route' => 'profile_upload_photo', '_controller' => 'App\\Controller\\ProfileController::uploadPhoto'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:133)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|hebergement(?'
                        .'|/reservations/([^/]++)/(?'
                            .'|edit(*:292)'
                            .'|delete(*:306)'
                        .')'
                        .'|s/([^/]++)/(?'
                            .'|edit(*:333)'
                            .'|delete(*:347)'
                        .')'
                    .')'
                    .'|user/(?'
                        .'|(\\d+)(*:370)'
                        .'|(\\d+)/toggle\\-status(*:398)'
                        .'|(\\d+)/delete(*:418)'
                        .'|form/(\\d+)/edit(?'
                            .'|(*:444)'
                        .')'
                    .')'
                    .'|publications/(?'
                        .'|([^/]++)/comment(*:486)'
                        .'|comment/([^/]++)/edit(*:515)'
                        .'|([^/]++)/(?'
                            .'|quick\\-edit(*:546)'
                            .'|edit(*:558)'
                            .'|delete(*:572)'
                        .')'
                        .'|comment/([^/]++)/delete(*:604)'
                        .'|signalement/([^/]++)/(?'
                            .'|traiter(*:643)'
                            .'|delete(*:657)'
                        .')'
                        .'|ai\\-delete\\-comment/([^/]++)(*:694)'
                    .')'
                    .'|re(?'
                        .'|clamations/(?'
                            .'|(\\d+)/statut(*:734)'
                            .'|(\\d+)/repondre(*:756)'
                            .'|(\\d+)/delete(*:776)'
                            .'|([^/]++)(*:792)'
                        .')'
                        .'|servation/([^/]++)/confirm(*:827)'
                    .')'
                    .'|whatsapp\\-sessions/([^/]++)/delete(*:870)'
                    .'|categorie(?'
                        .'|/(?'
                            .'|edit/([^/]++)(*:907)'
                            .'|delete/([^/]++)(*:930)'
                        .')'
                        .'|s\\-hebergement/([^/]++)/(?'
                            .'|edit(*:970)'
                            .'|delete(*:984)'
                        .')'
                    .')'
                    .'|excursion/(?'
                        .'|edit/([^/]++)(*:1020)'
                        .'|delete/([^/]++)(*:1044)'
                    .')'
                    .'|transports/([^/]++)/(?'
                        .'|edit(*:1081)'
                        .'|delete(*:1096)'
                    .')'
                .')'
                .'|/fa(?'
                    .'|cture/([^/]++)/pdf(*:1131)'
                    .'|voris/([^/]++)(*:1154)'
                .')'
                .'|/hebergements/(?'
                    .'|categorie/([^/]++)(*:1199)'
                    .'|([^/]++)(*:1216)'
                .')'
                .'|/transport(?'
                    .'|s/(\\d+)(*:1246)'
                    .'|/(?'
                        .'|mobile/([^/]++)(*:1274)'
                        .'|pass\\-image/([^/]++)(*:1303)'
                    .')'
                .')'
                .'|/loisirs/categorie/([^/]++)(*:1341)'
                .'|/excursion/([^/]++)(?'
                    .'|(*:1372)'
                    .'|/r(?'
                        .'|eserver(*:1393)'
                        .'|ate(*:1405)'
                    .')'
                .')'
                .'|/meteo/excursion/([^/]++)(*:1441)'
                .'|/p(?'
                    .'|aiement/checkout/([^/]++)(*:1480)'
                    .'|osts/(?'
                        .'|([^/]++)/edit(*:1510)'
                        .'|api/post/([^/]++)/(?'
                            .'|like(*:1544)'
                            .'|comment(*:1560)'
                        .')'
                        .'|([^/]++)/delete(*:1585)'
                        .'|api/(?'
                            .'|comment/([^/]++)/(?'
                                .'|edit(*:1625)'
                                .'|delete(*:1640)'
                            .')'
                            .'|post/([^/]++)/report(*:1670)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|servation/(?'
                        .'|show/([^/]++)(*:1714)'
                        .'|([^/]++)(?'
                            .'|(*:1734)'
                            .'|/c(?'
                                .'|onfirmation(*:1759)'
                                .'|ancel(*:1773)'
                            .')'
                        .')'
                    .')'
                    .'|clamation/([^/]++)/satisfaction(*:1816)'
                .')'
                .'|/create/([^/]++)(*:1842)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        204 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        292 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\Admin\\AdminReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\Admin\\AdminReservationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        333 => [[['_route' => 'admin_hebergement_edit', '_controller' => 'App\\Controller\\HebergementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'admin_hebergement_delete', '_controller' => 'App\\Controller\\HebergementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        370 => [[['_route' => 'admin_user_view', '_controller' => 'App\\Controller\\AdminController::viewUser'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'admin_user_toggle_status', '_controller' => 'App\\Controller\\AdminController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        418 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        444 => [
            [['_route' => 'admin_user_form_edit', '_controller' => 'App\\Controller\\AdminController::getEditForm'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_user_form_edit_submit', '_controller' => 'App\\Controller\\AdminController::submitEditForm'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        486 => [[['_route' => 'admin_publication_add_comment', '_controller' => 'App\\Controller\\AdminPublicationController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        515 => [[['_route' => 'admin_publication_comment_edit', '_controller' => 'App\\Controller\\AdminPublicationController::editComment'], ['id'], ['POST' => 0], null, false, false, null]],
        546 => [[['_route' => 'admin_publication_quick_edit', '_controller' => 'App\\Controller\\AdminPublicationController::quickEdit'], ['id'], ['POST' => 0], null, false, false, null]],
        558 => [[['_route' => 'admin_publication_edit', '_controller' => 'App\\Controller\\AdminPublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        572 => [[['_route' => 'admin_publication_delete', '_controller' => 'App\\Controller\\AdminPublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        604 => [[['_route' => 'admin_publication_comment_delete', '_controller' => 'App\\Controller\\AdminPublicationController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        643 => [[['_route' => 'admin_publication_signalement_traiter', '_controller' => 'App\\Controller\\AdminPublicationController::traiterSignalement'], ['id'], ['POST' => 0], null, false, false, null]],
        657 => [[['_route' => 'admin_publication_signalement_delete', '_controller' => 'App\\Controller\\AdminPublicationController::deleteSignalement'], ['id'], ['POST' => 0], null, false, false, null]],
        694 => [[['_route' => 'admin_publication_ai_delete_comment', '_controller' => 'App\\Controller\\AdminPublicationController::aiDeleteComment'], ['id'], ['POST' => 0], null, false, true, null]],
        734 => [[['_route' => 'admin_reclamation_statut', '_controller' => 'App\\Controller\\AdminReclamationController::changeStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        756 => [[['_route' => 'admin_reclamation_repondre', '_controller' => 'App\\Controller\\AdminReclamationController::repondre'], ['id'], ['POST' => 0], null, false, false, null]],
        776 => [[['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\AdminReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        792 => [[['_route' => 'admin_reclamation_view', '_controller' => 'App\\Controller\\AdminReclamationController::view'], ['id'], ['GET' => 0], null, false, true, null]],
        827 => [[['_route' => 'app_reservation_confirm', '_controller' => 'App\\Controller\\ReservationController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        870 => [[['_route' => 'admin_whatsapp_session_delete', '_controller' => 'App\\Controller\\AdminWhatsAppSessionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        907 => [[['_route' => 'admin_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], null, null, false, true, null]],
        930 => [[['_route' => 'admin_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], null, null, false, true, null]],
        970 => [[['_route' => 'admin_categorie_hebergement_edit', '_controller' => 'App\\Controller\\CategorieHebergementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        984 => [[['_route' => 'admin_categorie_hebergement_delete', '_controller' => 'App\\Controller\\CategorieHebergementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1020 => [[['_route' => 'admin_excursion_edit', '_controller' => 'App\\Controller\\ExcursionController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1044 => [[['_route' => 'admin_excursion_delete', '_controller' => 'App\\Controller\\ExcursionController::delete'], ['id'], null, null, false, true, null]],
        1081 => [[['_route' => 'admin_transport_edit', '_controller' => 'App\\Controller\\TransportController::editTransport'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1096 => [[['_route' => 'admin_transport_delete', '_controller' => 'App\\Controller\\TransportController::deleteTransport'], ['id'], ['POST' => 0], null, false, false, null]],
        1131 => [[['_route' => 'facture_pdf', '_controller' => 'App\\Controller\\FactureController::telecharger'], ['id'], null, null, false, false, null]],
        1154 => [[['_route' => 'toggle_favoris', '_controller' => 'App\\Controller\\FavoriteController::toggle'], ['id'], ['POST' => 0], null, false, true, null]],
        1199 => [[['_route' => 'app_hebergements_categorie', '_controller' => 'App\\Controller\\FrontOfficeController::hebergementsByCategorie'], ['id'], ['GET' => 0], null, false, true, null]],
        1216 => [[['_route' => 'app_hebergement_detail', '_controller' => 'App\\Controller\\HebergementDetailController::detail'], ['id'], null, null, false, true, null]],
        1246 => [[['_route' => 'app_transport_detail', '_controller' => 'App\\Controller\\FrontOfficeController::transportDetail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1274 => [[['_route' => 'app_transport_mobile_detail', '_controller' => 'App\\Controller\\FrontOfficeController::mobileDetail'], ['id'], null, null, false, true, null]],
        1303 => [[['_route' => 'app_transport_pass_image', '_controller' => 'App\\Controller\\FrontOfficeController::generatePassImage'], ['id'], null, null, false, true, null]],
        1341 => [[['_route' => 'excursions_by_categorie', '_controller' => 'App\\Controller\\LoisirController::excursionsByCategorie'], ['id'], null, null, false, true, null]],
        1372 => [[['_route' => 'excursion_detail', '_controller' => 'App\\Controller\\LoisirController::detail'], ['id'], null, null, false, true, null]],
        1393 => [[['_route' => 'excursion_reserver', '_controller' => 'App\\Controller\\LoisirController::reserver'], ['id'], null, null, false, false, null]],
        1405 => [[['_route' => 'rate_excursion', '_controller' => 'App\\Controller\\LoisirController::rate'], ['id'], ['POST' => 0], null, false, false, null]],
        1441 => [[['_route' => 'app_weather_excursion', '_controller' => 'App\\Controller\\LoisirController::meteoByExcursion'], ['id'], null, null, false, true, null]],
        1480 => [[['_route' => 'app_paiement_checkout', '_controller' => 'App\\Controller\\PaiementController::checkout'], ['id'], null, null, false, true, null]],
        1510 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1544 => [[['_route' => 'api_post_like', '_controller' => 'App\\Controller\\PostController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        1560 => [[['_route' => 'api_post_comment', '_controller' => 'App\\Controller\\PostController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1585 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1625 => [[['_route' => 'api_comment_edit', '_controller' => 'App\\Controller\\PostController::editComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1640 => [[['_route' => 'api_comment_delete', '_controller' => 'App\\Controller\\PostController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1670 => [[['_route' => 'post_report', '_controller' => 'App\\Controller\\PostController::reportPost'], ['id'], ['POST' => 0], null, false, false, null]],
        1714 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], null, null, false, true, null]],
        1734 => [[['_route' => 'app_reserver_excursion', '_controller' => 'App\\Controller\\ReservationController::reserver'], ['idExcursion'], ['POST' => 0], null, false, true, null]],
        1759 => [[['_route' => 'app_reservation_confirmation', '_controller' => 'App\\Controller\\ReservationController::confirmation'], ['id'], null, null, false, false, null]],
        1773 => [[['_route' => 'app_reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1816 => [[['_route' => 'reclamation_satisfaction', '_controller' => 'App\\Controller\\ReclamationController::satisfaction'], ['id'], ['POST' => 0], null, false, false, null]],
        1842 => [
            [['_route' => 'app_reservation_create', '_controller' => 'App\\Controller\\ReservationController::create'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
