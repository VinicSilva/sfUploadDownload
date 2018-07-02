<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivroRepository")
 */
class Livro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Informe o titulo do ebook")
     */
    private $titulo;

    /**
     * @var string
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Selecione o PDF para esse e-book")
     * @Assert\File(mimeTypes={"application/pdf"}, mimeTypesMessage="Arquivo inválido")
     */
    private $ebook;

    /**
     * @var string
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Selecione uma capa para esse e-book")
     * @Assert\Image(mimeTypes={"image/*"}, mimeTypesMessage="Arquivo inválido!")
     */
    private $capa;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Livro
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getEbook()
    {
        return $this->ebook;
    }

    /**
     * @param string $ebook
     * @return Livro
     */
    public function setEbook($ebook)
    {
        $this->ebook = $ebook;
        return $this;
    }

    /**
     * @return string
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * @param string $capa
     * @return Livro
     */
    public function setCapa($capa)
    {
        $this->capa = $capa;
        return $this;
    }

}
