<?php class BeanieFilter
{
    protected string $size;
    protected string $material;
    protected string $priceMin;
    protected string $priceMax;

    public function __construct(string $size = "", string $material = "", string $priceMin = "", string $priceMax = "")
    {
        $this->size = $size;
        $this->material = $material;
        $this->priceMin = $priceMin;
        $this->priceMax = $priceMax;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    public function getPriceMin()
    {
        return $this->priceMin;
    }

    public function setPriceMin($priceMin)
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    public function getPriceMax()
    {
        return $this->priceMax;
    }

    public function setPriceMax($priceMax)
    {
        $this->priceMax = $priceMax;

        return $this;
    }
}
