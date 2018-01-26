<?php
declare(strict_types=1);
namespace ParagonIE\CSPBuilder;

/**
 * Trait CSPBuilderAwareTrait
 * @package ParagonIE\CSPBuilder
 */
trait CSPBuilderAwareTrait
{
  private static $CSPBuilder;

  /**
   * set CSPBuilder
   *
   * @param CSPBuilder $CSPBuilder CSPBuilder
   * @return $this
   */
  public function setCSPBuilder(CSPBuilder $CSPBuilder)
  {
      self::$CSPBuilder = $CSPBuilder;
      return $this;
  }

  /**
   * set CSPBuilder
   *
   * @return CSPBuilder $CSPBuilder
   */
  public function getCSPBuilder(): CSPBuilder
  {
      return self::$CSPBuilder;
  }
}