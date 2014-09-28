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
    private $curso;

    /**
     * @var \Editorial
     *
     * @ORM\ManyToOne(targetEntity="Editorial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EditorialID", referencedColumnName="ID")
     * })
     */
    private $editorial;



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
     * Set titulo
     *
     * @param string $titulo
     * @return Libro
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autores
     *
     * @param string $autores
     * @return Libro
     */
    public function setAutores($autores)
    {
        $this->autores = $autores;

        return $this;
    }

    /**
     * Get autores
     *
     * @return string 
     */
    public function getAutores()
    {
        return $this->autores;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Libro
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set portada
     *
     * @param string $portada
     * @return Libro
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return string 
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set anyo
     *
     * @param integer $anyo
     * @return Libro
     */
    public function setAnyo($anyo)
    {
        $this->anyo = $anyo;

        return $this;
    }

    /**
     * Get anyo
     *
     * @return integer 
     */
    public function getAnyo()
    {
        return $this->anyo;
    }

    /**
     * Set cursoid
     *
     * @param \Relibros\LibroBundle\Entity\Curso $curso
     * @return Libro
     */
    public function setCurso(\Relibros\LibroBundle\Entity\Curso $curso = null)
    {
        $this->cursoid = $curso;

        return $this;
    }

    /**
     * Get cursoid
     *
     * @return \Relibros\LibroBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set editorialid
     *
     * @param \Relibros\LibroBundle\Entity\Editorial $editorial
     * @return Libro
     */
    public function setEditorial(\Relibros\LibroBundle\Entity\Editorial $editorial = null)
    {
        $this->editorialid = $editorial;

        return $this;
    }

    /**
     * Get editorialid
     *
     * @return \Relibros\LibroBundle\Entity\Editorial 
     */
    public function getEditorial()
    {
        return $this->editorial;
    }
}
