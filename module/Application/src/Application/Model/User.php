<?php
/**
 * User
 * @author Bidoum
 *
 */
namespace Application\Model;
use Doctrine\ORM\Mapping as ORM;
use ZfcUser\Entity\UserInterface;

/**
 * Représentation d'un utilisateur
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 * @author
 */
class User implements UserInterface
{
    /*********************************
     * ATTRIBUTS
    *********************************/
     
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="user_id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true, name="username")
     */
    protected $username;

    /**
     * @ORM\Column(type="string", unique=true,  length=255, name="email")
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=true, name="display_name")
     */
    protected $displayName;

    /**
     * @ORM\Column(type="string", length=128, name="password")
     */
    protected $password;

    /**
     * @ORM\Column(type="integer", name="state")
     */
    protected $state;


    /*********************************
     * CONSTRUCTEUR / DESTRUCTEUR
    *********************************/
     
    /**
     * Constructeur
     */
    public function __construct()
    {
         
    }
 
    /*********************************
     * ACCESSEURS
    *********************************/
     
    /*********** GETTERS ************/
     
    /**
     * Obtient l'identifiant utilisateur
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
     
    /**
     * Obtient le login
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
     
    /**
     * Obtient l'email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
     
    /**
     * Obtient le nom affiché
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
     
    /**
     * Obtient le mot de passe
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }   
     
    /**
     * Obtient le statut du compte
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }
     
     
    /*********** SETTERS ************/
     
    /**
     * Définit l'id utilisateur
     * @param int $id L'identifiant
     * @return User
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }
     
    /**
     * Définit le login
     * @param string $username Le login
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
     
    /**
     * Définit l'email
     * @param string $email L'email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
     
    /**
     * Définit le nom complet
     * @param string $displayName Le nom complet
     * @return User
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }
     
    /**
     * Définit le mot de passe
     * @param string $password Le mot de passe
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
     
    /**
     * Définit l'état
     * @param int $state L'etat
     * @return User
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}