<?php

namespace KCS\Model;


class Product
{
    private $id;
    private $product;
    private $pr_table;
    private $pr_meniu;
    private $grImage;


    public function getId()
    {
        return $this->id;
    }

      public function getProduct()
    {
        return $this->product;
    }

    public function getPrTable()
    {
        return $this->pr_table;
    }
    public function getPrMeniu()
    {
        return $this->pr_meniu;
    }

    public function getProductGrImage()
    {
        return $this->grImage;
    }

}