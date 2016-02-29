<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "ninepixels-seed");

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

define("SECURE", FALSE);

define("LOGIN", FALSE);

if (LOGIN) {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
}

// FUNCTIONS

/*
 *
 * $table {string} Table from whome to retrive content
 * $ident {string} Identifier of content
 * $create {string} Create table if doesn't exist
 */
function get_content($args) {
    $mysqli = $GLOBALS['mysqli'];

    if (isset($args['create']) && $args['create']) {
        $sql = "CREATE TABLE IF NOT EXISTS " . $args['table'] . " (
                item_id                 int(11) NOT NULL AUTO_INCREMENT,
                user_id                 int(11) NOT NULL,
                item_structure          varchar(2048) CHARACTER SET utf8 NOT NULL,
                item_class              varchar(64) CHARACTER SET utf8 NOT NULL,
                item_editable           int(11) DEFAULT 1,
                item_delete             int(11) DEFAULT 0,
                PRIMARY KEY (item_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        $mysqli->query($sql);
    }

    $sql = 'SELECT * FROM ' . $args['table'];

    if (isset($args['ident'])) {
        $sql .= ' WHERE item_id = ' . $args['ident'];
    }

    $mysqli->query('SET NAMES utf8');

    return $mysqli->query($sql);
}
