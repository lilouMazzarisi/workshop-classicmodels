<?php
declare(strict_types=1);

session_start();

require_once 'classes/AuthController.php';

$authController = new AuthController();

if (empty($_POST)) {
    $authController->showRegistrationForm();
} else {
    $authController->register($_POST);
}
