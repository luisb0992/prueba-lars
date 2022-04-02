<?php

/**
 * Gestión de los status de las ordenes
 *
 * @author 		luis barrios
 */

namespace App\Utils;

final class OrderStatus
{

  /**
   * Orden completada
   */
  const COMPLETED = 1;

  /**
   * Orden pendiente
   */
  const PENDING = 2;

  /**
   * Orden en proceso
   */
  const PROCESSING = 3;

  /**
   * Orden cancelada
   */
  const CANCELLED = 4;
}
