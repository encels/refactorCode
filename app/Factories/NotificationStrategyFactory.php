<?php

require_once __DIR__ . '/../Strategies/IosNotificationStrategy.php';
require_once __DIR__ . '/../Strategies/AndroidNotificationStrategy.php';

/**
 * Clase NotificationStrategyFactory
 *
 * Fábrica para crear estrategias de notificación según el tipo de usuario.
 */
class NotificationStrategyFactory
{
    /**
     * Crea una estrategia de notificación basada en el tipo de usuario.
     *
     * @param int $userType Tipo de usuario (1 para iOS, otro para Android).
     * @return NotificationStrategy Estrategia de notificación correspondiente.
     */
    public static function create($userType)
    {
        if ($userType == '1') {
            return new IosNotificationStrategy();
        }

        return new AndroidNotificationStrategy();
    }
}
