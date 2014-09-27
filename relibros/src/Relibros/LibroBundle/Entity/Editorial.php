<?php

namespace Relibros\LibroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editorial
 *
 * @ORM\Table(name="editorial")
 * @ORM\Entity
 */
class Editorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=false)
     */
    private $nombre;


}
