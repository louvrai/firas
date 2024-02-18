<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Cours::class)]
    private Collection $idCours;

    public function __construct()
    {
        $this->idCours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getIdCours(): Collection
    {
        return $this->idCours;
    }

    public function addIdCour(Cours $idCour): static
    {
        if (!$this->idCours->contains($idCour)) {
            $this->idCours->add($idCour);
            $idCour->setCategorie($this);
        }

        return $this;
    }

    public function removeIdCour(Cours $idCour): static
    {
        if ($this->idCours->removeElement($idCour)) {
            // set the owning side to null (unless already changed)
            if ($idCour->getCategorie() === $this) {
                $idCour->setCategorie(null);
            }
        }

        return $this;
    }
}
