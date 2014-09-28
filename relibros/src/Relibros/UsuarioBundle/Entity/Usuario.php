<?php

namespace Relibros\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Relibros\UsuarioBundle\Entity\Usuario
 *
 * @ORM\Table(name="Usuario")
 * @ORM\Entity(repositoryClass="Relibros\UsuarioBundle\Entity\UsuarioRepository")
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=false)
     */
    private $nombre;
    
    /**
     * @var string $email
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false, unique=true)
     */
    protected $email;

    /**
     * @var integer $telefono
     *
     * @ORM\Column(name="Telefono", type="string", nullable=true)
     */
    private $telefono;

    /**
     * @var string $password
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;
    
    /**
     * @var string $salt
     *
     * @ORM\Column(name="Salt", type="string", length=255, nullable=true)
     */
     protected $salt;
                  
    /**
     * @var datetime $fecha_alta
     *
     * @ORM\Column(name="fecha_alta", type="datetime")
     * @Assert\DateTime()
     */
    private $fecha_alta;
    
    public function eraseCredentials() {
        
    }

    public function getPassword() {
        
    }

    public function getRoles() {
        
    }

    public function getSalt() {
        
    }

    public function getUsername() {
        
    }

    public function serialize() {
        
    }

    public function unserialize($serialized) {
        
    }

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
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set fecha_alta
     *
     * @param \DateTime $fechaAlta
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fecha_alta = $fechaAlta;

        return $this;
    }

    /**
     * Get fecha_alta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fecha_alta;
    }
}
