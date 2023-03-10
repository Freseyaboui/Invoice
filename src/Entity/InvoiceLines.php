<?php

namespace App\Entity;

use App\Repository\InvoiceLinesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoiceLinesRepository::class)
 */
class InvoiceLines
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Invoice::class, cascade={"persist", "remove"})
     */
    private $invoiceId;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @ORM\Column(type="float")
     */
    private $vatAmount;

    /**
     * @ORM\Column(type="float")
     */
    private $totalWithVat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceId(): ?Invoice
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(?Invoice $invoiceId): self
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }

    public function setVatAmount(float $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }

    public function getTotalWithVat(): ?float
    {
        return $this->totalWithVat;
    }

    public function setTotalWithVat(float $totalWithVat): self
    {
        $this->totalWithVat = $totalWithVat;

        return $this;
    }
}
