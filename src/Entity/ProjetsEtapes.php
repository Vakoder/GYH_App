<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetsEtapes
 *
 * @ORM\Table(name="projets_etapes")
 * @ORM\Entity
 */
class ProjetsEtapes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     */
    private $idProjet;

    /**
     * @var int
     *
     * @ORM\Column(name="id_etape", type="integer", nullable=false)
     */
    private $idEtape;

    /**
     * @ORM\ManyToMany(targetEntity=Projets::class, mappedBy="etapes")
     */
    private $projets;

    public function __construct()
    {
        $this->projets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProjet(): ?int
    {
        return $this->idProjet;
    }

    public function setIdProjet(int $idProjet): self
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    public function getIdEtape(): ?int
    {
        return $this->idEtape;
    }

    public function setIdEtape(int $idEtape): self
    {
        $this->idEtape = $idEtape;

        return $this;
    }

    /**
     * @return Collection|Projets[]
     */
    public function getProjets(): Collection
    {
        return $this->projets;
    }

    public function addProjet(Projets $projet): self
    {
        if (!$this->projets->contains($projet)) {
            $this->projets[] = $projet;
            $projet->addEtape($this);
        }

        return $this;
    }

    public function removeProjet(Projets $projet): self
    {
        if ($this->projets->removeElement($projet)) {
            $projet->removeEtape($this);
        }

        return $this;
    }


}
