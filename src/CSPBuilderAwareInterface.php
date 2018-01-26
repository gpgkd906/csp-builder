<?php
declare(strict_types=1);
namespace ParagonIE\CSPBuilder;

/**
 * Interface CSPBuilderAwareInterface
 * @package ParagonIE\CSPBuilder
 */
interface CSPBuilderAwareInterface
{
    /**
     * set CSPBuilder
     *
     * @param CSPBuilder $CSPBuilder CSPBuilder
     * @return mixed
     */
    public function setCSPBuilder(CSPBuilder $CSPBuilder);

    /**
     * get CSPBuilder
     *
     * @return CSPBuilder $CSPBuilder
     */
    public function getCSPBuilder() : CSPBuilder;

}