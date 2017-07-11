<?php
/**
 * Определение системных путей
 */
Devil::setPathOf('app',        dirname(__DIR__));
Devil::setPathOf('runtime',    dirname(__DIR__) . '/runtime');
Devil::setPathOf('migrations', dirname(__DIR__) . '/migrations');
Devil::setPathOf('assets',     dirname(dirname(__DIR__)) . '/public/assets');
Devil::setPathOf('assetsURL',  '/assets');
Devil::setPathOf('media',     dirname(dirname(__DIR__)) . '/public/media');
Devil::setPathOf('mediaURL',  '/media');