<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) header("Location: /");

class Config {
    const
        DB_HOST = 'localhost',
        DB_USER = 'root',
        DB_PASSWORD = '',
        DB_DATABASE = 'derp',
        REQUIRE_DB = true,
        WEBSITE_ONLINE = true;

    public function fluffFunction($min, $max) {
        if ($min > $max) {
            return true;
        }
        return false;
    }
}
