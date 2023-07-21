<?php
// Define constants for database connection
const HOST = "68.178.164.190";
const DB_NAME = 'u194143034_prarang';
const USER = "colorcoder";
const PASSWORD = "black";
// Create a new mysqli object for database connection
const connection = new mysqli(HOST, USER, PASSWORD, DB_NAME);
// Check connection
if (connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
