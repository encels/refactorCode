<?php

/**
 * Interfaz NotificationStrategy
 *
 * Define el contrato para todas las estrategias de notificación. 
 * Estas pueden ser para Android y iPhone e inclusive se podrian extender para otros como NOtificaciones Push o de Email
 */
interface NotificationStrategy
{
    /**
     * Envía una notificación a un usuario.
     *
     * @param string $uuid Identificador único del usuario.
     * @param string $message Mensaje de la notificación.
     * @param array $data Datos adicionales para la notificación.
     */
    public function send($uuid, $message, $data);
}
