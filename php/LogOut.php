<?php
/*
Saioa suntsitzen duen fitxategia
*/
if (!isset($_SESSION)){
    session_start();
}
session_destroy();
?>