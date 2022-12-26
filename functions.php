<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Subsribe_Form', 
        'root', 
        'viLXjKTLEziaMJLz'
    );
}