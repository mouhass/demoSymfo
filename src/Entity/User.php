<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements  UserInterface,\Serializable
{
     //serializable pour conserver les données de l'utilisateur dans une session
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=Property::class, mappedBy="createdBy", orphanRemoval=true)
     */
    private $properties;

    public function __construct()
    {
        $this->properties = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles()
    {
       return  ['ROLE_ADMIN'];
    }

    public function getSalt()
    {
      return null;
    }

    public function eraseCredentials()
    {

    }

    public function serialize()
    { // transformer un objet en une chaine
        return serialize([
            $this->id,
            $this->username,
            $this->password]
        );
    }

    public function unserialize($serialized)
    { //transformer une chaine en un objet
        list($this->id,
            $this->username,
            $this->password,
            ) = unserialize($serialized, ['allowed_classes'=>false]);
    }

    /**
     * @return Collection|Property[]
     */
    public function getProperties(): Collection
    {
        return $this->properties;
    }

    public function addProperty(Property $property): self
    {
        if (!$this->properties->contains($property)) {
            $this->properties[] = $property;
            $property->setCreatedBy($this);
        }

        return $this;
    }

    public function removeProperty(Property $property): self
    {
        if ($this->properties->removeElement($property)) {
            // set the owning side to null (unless already changed)
            if ($property->getCreatedBy() === $this) {
                $property->setCreatedBy(null);
            }
        }

        return $this;
    }
}
