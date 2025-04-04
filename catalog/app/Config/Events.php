<?php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\HotReloader\HotReloader;
use Shared\Models\Setting\EventsModel;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */

Events::on('pre_system', static function (): void {
    if (ENVIRONMENT !== 'testing') {
        if (ini_get('zlib.output_compression')) {
            throw FrameworkException::forEnabledZlibOutputCompression();
        }

        while (ob_get_level() > 0) {
            ob_end_flush();
        }

        ob_start(static fn ($buffer) => $buffer);
    }

    /*
     * --------------------------------------------------------------------
     * Debug Toolbar Listeners.
     * --------------------------------------------------------------------
     * If you delete, they will no longer be collected.
     */
    if (CI_DEBUG && ! is_cli()) {
        Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
        service('toolbar')->respond();
        // Hot Reload route - for framework use on the hot reloader.
        if (ENVIRONMENT === 'development') {
            service('routes')->get('__hot-reload', static function (): void {
                (new HotReloader())->run();
            });
        }
    }
    /*
     * --------------------------------------------------------------------
     * DB Events.
     * --------------------------------------------------------------------
     * If you delete, All System custom events will not work.
     */
	$eventsModel = new EventsModel();
    $results = $eventsModel->where(['status' => 1])->findAll();
    foreach ($results as $result) {
		if (substr($result['trigger'], 0, strlen(APP_NAMESPACE) + 1) == ('\\' . APP_NAMESPACE)) {
            if ($result['priority'] != 0) {
                Events::on($result['code'], $result['action'], $result['priority']);
            } else {
                Events::on($result['code'], $result['action']);
            }
        }
    }

});
 /*
     * --------------------------------------------------------------------
     * Startup instructor for APP
     * --------------------------------------------------------------------
     * setting registry vars and locale.
     */
    Events::on('pre_system', APP_NAMESPACE . '\Events\StartupEvent::index');

