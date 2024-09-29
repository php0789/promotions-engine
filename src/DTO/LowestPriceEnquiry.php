<?php

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEnquiryInterface
{
    private ?int $productId;
    private ?int $quantity;
    private ?string $requestLocation;
    private ?string $voucherCode;
    private ?string $requestDate;
    private ?float $price;
    private ?float $discountedPrice;
    private ?int $promotionId;
    private ?string $promotionName;
    private ?float $promotionPrice;

    
    /**
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

     /**
     * @param int|null $productId
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

     /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

     /**
     * @param int|null $productId
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    // Getter and setter for requestLocation
    public function getRequestLocation(): ?string
    {
        return $this->requestLocation;
    }

    public function setRequestLocation(?string $requestLocation): self
    {
        $this->requestLocation = $requestLocation;
        return $this;
    }

    // Getter and setter for voucherCode
    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }

    public function setVoucherCode(?string $voucherCode): self
    {
        $this->voucherCode = $voucherCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }

    /**
     * @param string|null $requestDate
     */
    public function setRequestDate(?string $requestDate): void
    {
        $this->requestDate = $requestDate;
    }

    // Getter and setter for price
    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    // Getter and setter for discountedPrice
    public function getDiscountedPrice(): ?float
    {
        return $this->discountedPrice;
    }

    public function setDiscountedPrice(?float $discountedPrice): self
    {
        $this->discountedPrice = $discountedPrice;
        return $this;
    }

    // Getter and setter for promotionId
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    // Getter and setter for promotionName
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    // Getter and setter for promotionPrice
    public function getPromotionPrice(): ?float
    {
        return $this->promotionPrice;
    }

    public function setPromotionPrice(?float $promotionPrice): self
    {
        $this->promotionPrice = $promotionPrice;
        return $this;
    }

    public function JsonSerialize(): array
    {
       return get_object_vars($this);
    }
}