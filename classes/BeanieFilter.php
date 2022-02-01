<?php

class BeanieFilter
{
    protected string $size = "";
    protected string $material = "";
    protected string $priceMin = "";
    protected string $priceMax = "";

    public function __construct(string $size, string $material, string $priceMin, string $priceMax)
    {
        $this->size = $size;
        $this->material = $material;
        $this->priceMin = $priceMin;
        $this->priceMax = $priceMax;
    }
}
