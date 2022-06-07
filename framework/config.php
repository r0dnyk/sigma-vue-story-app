<?php

define('APP_ROOT', dirname(__FILE__, 2));

const APP_CONTROLLERS = APP_ROOT . '/app/Controllers/';
const APP_FRAMEWORK = APP_ROOT . '/framework/';
const APP_VIEWS = APP_ROOT . '/views/';
const ROUTES_PATH = APP_ROOT . '/framework/routes.php';

const DB_HOST = 'localhost';
const DB_NAME = 'task5';
const DB_USER = 'admin';
const DB_PASS = '@secret@';
const DB_DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
