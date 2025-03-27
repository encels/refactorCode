<?php

require_once __DIR__ . '/../Services/ServiceManager.php';

/**
 * Clase ServiceController
 *
 * Controlador responsable de manejar las solicitudes relacionadas con los servicios.
 */
class ServiceController
{
    /**
     * @var ServiceManager $serviceManager Instancia del gestor de servicios.
     */
    private $serviceManager;

    /**
     * Constructor de la clase ServiceController.
     */
    public function __construct()
    {
        $this->serviceManager = new ServiceManager();
    }

    /**
     * Método para confirmar un servicio.
     *
     * @return string JSON con el resultado de la operación.
     */
    public function post_confirm()
    {
        $serviceId = Input::post('service_id');
        $driverId = Input::post('driver_id');

        // Validar entrada
        if (!$serviceId || !$driverId) {
            return Response::json(['error' => 'Datos de entradas inválidos'], 400);
        }

        try {
            // Confirmar servicio
            $this->serviceManager->confirmService($serviceId, $driverId);

            return Response::json(['error' => '0', 'message' => 'Servicio confirmado']);
        } catch (\Exception $e) {
            return Response::json(['error' => '1', 'message' => $e->getMessage()], 500);
        }
    }
}
