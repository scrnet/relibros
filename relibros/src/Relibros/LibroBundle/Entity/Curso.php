<?php

namespace Relibros\LibroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso", indexes={@ORM\Index(name="FKCurso992607", columns={"EtapaID"})})
 * @ORM\Entity
 */
class Curso
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

    /**
     * @var \Etapa
     *
     * @ORM\ManyToOne(targetEntity="Etapa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EtapaID", referencedColumnName="ID")
     * })
     */
    private $etapa;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Curso
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set etapaid
     *
     * @param \Relibros\LibroBundle\Entity\Etapa $etapa
     * @return Curso
     */
    public function setEtapa(\Relibros\LibroBundle\Entity\Etapa $etapa = null)
    {
        $this->etapaid = $etapaid;

        return $this;
    }

    /**
     * Get etapaid
     *
     * @return \Relibros\LibroBundle\Entity\Etapa 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }
}
