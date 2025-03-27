<?php

require_once __DIR__ . '/NotificationStrategy.php';

/**
 * Clase IosNotificationStrategy
 *
 * Estrategia para enviar notificaciones a dispositivos iOS.
 */
class IosNotificationStrategy implements NotificationStrategy
{
    /**
     * Envía una notificación a un dispositivo iOS.
     *
     * @param string $uuid Identificador único del usuario.
     * @param string $message Mensaje de la notificación.
     * @param array $data Datos adicionales para la notificación.
     */
    public function send($uuid, $message, $data)
    {
        Push::make()->ios($uuid, $message, 1, 'honk.wav', 'Open', $data);
    }
}
