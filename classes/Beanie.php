<?php class Beanie
{
    protected string $name;
    protected float $price;
    protected string $desc;
    protected string $src;
    protected array $material;
    protected array $size;

    const AVAILABLE_SIZES = ['S', 'M', 'L', 'XL'];
    const AVAILABLE_MATERIALS = ['Cachemire', 'Coton', 'Laine', 'Soie'];

    public function __construct(string $name, float $price, string $desc, string $src, array $material, array $size)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->src = $src;
        $this->material = $material;
        $this->size = $size;
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

    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getAvailableSizes()
    {
        return self::AVAILABLE_SIZES;
    }

    public function getAvailableMaterials()
    {
        return self::AVAILABLE_MATERIALS;
    }
}
