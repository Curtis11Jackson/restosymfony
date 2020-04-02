<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_ingredient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_recette;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomIngredient(): ?string
    {
        return $this->Nom_ingredient;
    }

    public function setNomIngredient(string $Nom_ingredient): self
    {
        $this->Nom_ingredient = $Nom_ingredient;

        return $this;
    }

    public function getIdRecette(): ?string
    {
        return $this->id_recette;
    }

    public function setIdRecette(string $id_recette): self
    {
        $this->id_recette = $id_recette;

        return $this;
    }
}
