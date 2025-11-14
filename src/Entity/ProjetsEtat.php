<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetsEtat
 *
 * @ORM\Table(name="projets_etat")
 * @ORM\Entity
 */
class ProjetsEtat
{
    public function __toString()
    {
        return $this->libelle;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @ORM\OneToOne(targetEntity=Projets::class, mappedBy="etat", cascade={"persist", "remove"})
     */
    private $projets;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getProjets(): ?Projets
    {
        return $this->projets;
    }

    public function setProjets(Projets $projets): self
    {
        // set the owning side of the relation if necessary
        if ($projets->getEtat() !== $this) {
            $projets->setEtat($this);
        }

        $this->projets = $projets;

        return $this;
    }


}
