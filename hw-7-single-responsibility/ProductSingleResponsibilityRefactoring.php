<?php

/**
 * Product instance representation
 */
class Product
{
    public function get()
    {
    } //get some value absolutely abstract

    public function set($name, $value)
    {
    } // set some values absolutely abstract
}

/**
 * Product storage
 */
class ProductRepository
{
    public function save(Product $product)
    {
    } //saving new product to data storage

    public function update(Product $product)
    {
    } //updating priduct in data storage

    public function delete(int $product_identifier)
    {
    } //deleting product in data storage
}

/**
 * Product output in some format ( HTML for example )
 */
class ProductOutputter
{
    public function show(Product $product)
    {
    }  //shows product ( HTML for example )

}

/**
 * Product print to console
 */
class ProductPrinter
{
    public function print(Product $product)
    {
    } //prints product to console
}

/* Before refactoring
class Product {
  public function get(name) {}
  public function set(name, value) {}
  public function save() {}
  public function update() {}
  public function delete() {}
  public function show() {}
  public function print() {}
}
*/
