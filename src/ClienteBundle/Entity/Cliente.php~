<?php

namespace ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Contrains as Assert;
use Symfony\Bridge\Doctrine\Validator\Contrains\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="ClienteBundle\Repository\ClienteRepository")
 */
class Cliente implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $nombre;


    /**
        * @ORM\Column(type="string", length=25, unique=true)
        */
       private $username;


    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoP", type="string", length=50)
     */
    private $apellidoP;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoM", type="string", length=50)
     */
    private $apellidoM;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="compania", type="string", length=100)
     */
    private $compania;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="cel", type="string", length=50)
     */
    private $cel;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     *
     * @ORM\OneToMany(targetEntity="Servicio", mappedBy="cliente")
     */
     private $servicios;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
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
     * Set apellidoP
     *
     * @param string $apellidoP
     *
     * @return Cliente
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;

        return $this;
    }

    /**
     * Get apellidoP
     *
     * @return string
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    public function getRoles()
   {
       return array('ROLE_CLIENTE');
   }

    public function setUsername($email)
   {
       $this->username = $email;
   }


    /**
     * Set apellidoM
     *
     * @param string $apellidoM
     *
     * @return Cliente
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;

        return $this;
    }

    /**
     * Get apellidoM
     *
     * @return string
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
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
     * Set compania
     *
     * @param string $compania
     *
     * @return Cliente
     */
    public function setCompania($compania)
    {
        $this->compania = $compania;

        return $this;
    }

    /**
     * Get compania
     *
     * @return string
     */
    public function getCompania()
    {
        return $this->compania;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
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

    public function getSalt()
   {
       // you *may* need a real salt depending on your encoder
       // see section on salt below
       return null;
   }


    /**
     * Set cel
     *
     * @param string $cel
     *
     * @return Cliente
     */
    public function setCel($cel)
    {
        $this->cel = $cel;

        return $this;
    }

    public function getPassword()
   {
       return $this->password;
   }

    /**
     * Get cel
     *
     * @return string
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Cliente
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->email,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->email,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    public function eraseCredentials()
   {
   }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->servicios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add servicio
     *
     * @param \ClienteBundle\Entity\Servicio $servicio
     *
     * @return Cliente
     */
    public function addServicio(\ClienteBundle\Entity\Servicio $servicio)
    {
        $this->servicios[] = $servicio;

        return $this;
    }

    /**
     * Remove servicio
     *
     * @param \ClienteBundle\Entity\Servicio $servicio
     */
    public function removeServicio(\ClienteBundle\Entity\Servicio $servicio)
    {
        $this->servicios->removeElement($servicio);
    }

    /**
     * Get servicios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServicios()
    {
        return $this->servicios;
    }

    public function __toString()
   {
       return strval($this->nombre);
   }
}
