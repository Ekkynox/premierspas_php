<?php

class Cart
{
    protected ?string $key = null;
    protected ?string $action = null;

    public function __construct()
    {
        if (isset($_GET['key'])) {
            $this->key=$_GET['key'];
        }
        if (isset($_GET['type'])) {
            $this->action=$_GET['type'];
        }
    }

    public function getKey()
    {
        return $this->key;
    }
    
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    public function addToCart()
    {
        if ($this->key != null) {
            if (isset($_SESSION['cart'][$this->key])) {
                if ($this->action == 'moins') {
                    $_SESSION['cart'][$this->key]--;
                } elseif ($this->action == 'plus') {
                    $_SESSION['cart'][$this->key]++;
                }
                if ($_SESSION['cart'][$this->key] <= 0) {
                    unset($_SESSION['cart'][$this->key]);
                }
            } else {
                $_SESSION['cart'][$this->key] = 1;
            }
            header('Location: ?page=cart');
        }
    }
}
