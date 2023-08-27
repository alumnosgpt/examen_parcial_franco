<?php

namespace Middleware;

class AuthMiddleware {
    public static function handle() {
        // Inicia la sesión si no está iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Verifica si el usuario ha iniciado sesión
        if (!isset($_SESSION['auth_user'])) {
            // Si no ha iniciado sesión, redirige al inicio de sesión
            header('Location: /login');
            exit;
        }
    }
}
