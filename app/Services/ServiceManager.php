<?php

require_once __DIR__ . '/../Strategies/NotificationStrategy.php';
require_once __DIR__ . '/../Factories/NotificationStrategyFactory.php';

/**
 * Clase ServiceManager
 *
 * Maneja la lógica de negocio relacionada con los servicios.
 */
class ServiceManager
{
    /**
     * Constantes para los estados de los servicios
     */
    const STATUS_PENDING = 1; // Servicio pendiente
    const STATUS_CONFIRMED = 2; // Servicio confirmado
    const STATUS_COMPLETED = 6; // Servicio completado

    /**
     * Confirma un servicio asignándolo a un conductor.
     *
     * @param int $serviceId ID del servicio.
     * @param int $driverId ID del conductor.
     * @throws \Exception Si ocurre un error durante la confirmación.
     */
    public function confirmService($serviceId, $driverId)
    {
        // Buscar el servicio
        $service = Service::find($serviceId);

        if (!$service) {
            throw new \Exception('Servicio no encontrado');
        }

        // Validar estado del servicio
        if ($service->status_id == self::STATUS_COMPLETED) {
            throw new \Exception('El Servicio ya está completado');
        }

        if ($service->driver_id !== null || $service->status_id !== self::STATUS_PENDING) {
            throw new \Exception('El servicio no puede ser confirmado');
        }

        // Actualizar servicio
        $service->update([
            'driver_id' => $driverId,
            'status_id' => self::STATUS_CONFIRMED,
        ]);

        // Actualizar conductor
        $driver = Driver::find($driverId);
        if (!$driver) {
            throw new \Exception('Conductor no encontrado');
        }

        $driver->update(['available' => '0']);

        // Notificar usuario
        $this->notifyUser($service);
    }

    /**
     * Notifica al usuario que su servicio ha sido confirmado.
     *
     * @param object $service Servicio que fue confirmado.
     */
    private function notifyUser($service)
    {
        $message = 'Tu servicio ha sido confirmado!';
        $data = ['serviceId' => $service->id];

        // Usar la fábrica para obtener la estrategia correcta
        $strategy = NotificationStrategyFactory::create($service->user->type);
        $strategy->send($service->user->uuid, $message, $data);
    }
}
