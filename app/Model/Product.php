<?php

namespace KCS\Model;


class Product
{
    private $id;
    private $product;
    private $pr_table;


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

}