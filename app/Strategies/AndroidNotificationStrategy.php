<?php

require_once __DIR__ . '/NotificationStrategy.php';

/**
 * Clase AndroidNotificationStrategy
 *
 * Estrategia para enviar notificaciones a dispositivos Android.
 */
class AndroidNotificationStrategy implements NotificationStrategy
{
    /**
     * Envía una notificación a un dispositivo Android.
     *
     * @param string $uuid Identificador único del usuario.
     * @param string $message Mensaje de la notificación.
     * @param array $data Datos adicionales para la notificación.
     */
    public function send($uuid, $message, $data)
    {
        Push::make()->android2($uuid, $message, 1, 'default', 'Open', $data);
    }
}
