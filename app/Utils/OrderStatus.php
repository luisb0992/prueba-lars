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
  const CANCELED = 4;

  /**
   * Devuelve el label del status
   *
   * @param  int  $status
   * @return string
   */
  public static function getLabel(int $status): string
  {
    switch ($status) {
      case self::COMPLETED:
        return 'Completada';
      case self::PENDING:
        return 'Pendiente';
      case self::PROCESSING:
        return 'En proceso';
      case self::CANCELLED:
        return 'Cancelada';
      default:
        return 'Desconocido';
    }
  }
}
