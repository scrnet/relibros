<?php

namespace Relibros\LibroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libro
 *
 * @ORM\Table(name="libro", indexes={@ORM\Index(name="FKLibro446660", columns={"CursoID"}), @ORM\Index(name="FKLibro737651", columns={"EditorialID"})})
 * @ORM\Entity
 */
class Libro
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
     * @ORM\Column(name="Titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Autores", type="string", length=255, nullable=true)
     */
    private $autores;

    /**
     * @var string
     *
     * @ORM\Column(name="ISBN", type="string", length=255, nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="Portada", type="string", length=255, nullable=true)
     */
    private $portada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anyo", type="integer", nullable=true)
     */
    private $anyo;

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CursoID", referencedColumnName="ID")
     * })
     */
    private $cursoid;

    /**
     * @var \Editorial
     *
     * @ORM\ManyToOne(targetEntity="Editorial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EditorialID", referencedColumnName="ID")
     * })
     */
    private $editorialid;


}
