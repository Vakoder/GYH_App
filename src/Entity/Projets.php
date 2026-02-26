<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;

#[ORM\Table(name: 'projets')]
#[ORM\Entity]
class Projets
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private ?int $id = null;

    #[ORM\Column(name: 'nom', type: 'string', length: 255, nullable: false)]
    private string $nom = '';

    #[ORM\Column(name: 'date_debut', type: 'date', nullable: false)]
    private ?DateTimeInterface $dateDebut = null;

    #[ORM\Column(name: 'date_fin', type: 'date', nullable: true)]
    private ?DateTimeInterface $dateFin = null;

    #[ORM\ManyToOne(targetEntity: Clients::class, inversedBy: 'projets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Clients $client = null;

    #[ORM\OneToOne(targetEntity: ProjetsEtat::class, inversedBy: 'projets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProjetsEtat $etat = null;

    #[ORM\ManyToMany(targetEntity: Documents::class, inversedBy: 'projets')]
    private Collection $documents;

    #[ORM\ManyToMany(targetEntity: ProjetsEtapes::class, inversedBy: 'projets')]
    private Collection $etapes;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
        $this->etapes = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->nom;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateDebut(): ?DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getEtat(): ?ProjetsEtat
    {
        return $this->etat;
    }

    public function setEtat(ProjetsEtat $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * @return Collection|Documents[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        $this->documents->removeElement($document);

        return $this;
    }

    /**
     * @return Collection|ProjetsEtapes[]
     */
    public function getEtapes(): Collection
    {
        return $this->etapes;
    }

    public function addEtape(ProjetsEtapes $etape): self
    {
        if (!$this->etapes->contains($etape)) {
            $this->etapes[] = $etape;
        }

        return $this;
    }

    public function removeEtape(ProjetsEtapes $etape): self
    {
        $this->etapes->removeElement($etape);

        return $this;
    }
}
