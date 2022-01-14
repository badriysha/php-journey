<?php

namespace Badriysha\Test;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function register(Product $product) : Product
    {
        if ($this->repository->findById() != null) {
            throw new \Exception("Product is already exist");
        }

        return $this->repository->save($product);
    }
}