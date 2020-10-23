<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="fk_empresa_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Empresa
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
     * @var string|null
     *
     * @ORM\Column(name="razao_social", type="string", length=45, nullable=true)
     */
    private $razaoSocial;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cnpj", type="integer", nullable=true)
     */
    private $cnpj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="endereco", type="string", length=45, nullable=true)
     */
    private $endereco;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telefone", type="integer", nullable=true)
     */
    private $telefone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ramo_de_atividade", type="string", length=45, nullable=true)
     */
    private $ramoDeAtividade;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero_de_funcionarios", type="integer", nullable=true)
     */
    private $numeroDeFuncionarios;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function getCnpj(): ?int
    {
        return $this->cnpj;
    }

    public function setCnpj(?int $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getTelefone(): ?int
    {
        return $this->telefone;
    }

    public function setTelefone(?int $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRamoDeAtividade(): ?string
    {
        return $this->ramoDeAtividade;
    }

    public function setRamoDeAtividade(?string $ramoDeAtividade): self
    {
        $this->ramoDeAtividade = $ramoDeAtividade;

        return $this;
    }

    public function getNumeroDeFuncionarios(): ?int
    {
        return $this->numeroDeFuncionarios;
    }

    public function setNumeroDeFuncionarios(?int $numeroDeFuncionarios): self
    {
        $this->numeroDeFuncionarios = $numeroDeFuncionarios;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }


}
