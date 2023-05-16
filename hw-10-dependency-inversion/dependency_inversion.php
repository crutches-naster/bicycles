<?php

interface IDataProvider
{
    public function getData() : array;
}


class Mysql implements IDataProvider
{
    public function getData() : array
    {
        return [ 'db-data' => 'some data from MySQL database'];
    }
}

class Mongo implements IDataProvider
{
    public function getData() : array
    {
        return [ 'db-data' => 'some data from Mongo database'];
    }
}


class Controller
{
    private IDataProvider $adapter;

    public function __construct(IDataProvider $provider)
    {
        $this->adapter = $provider;
    }

    function getData() : array
    {
        //Some usage of data from provider
        return $this->adapter->getData();
    }
}

$controllerWithMySQLData = new Controller( new Mysql() );
$controllerWithMongoData = new Controller( new Mongo() );

echo print_r($controllerWithMySQLData->getData(), true);
echo print_r($controllerWithMongoData->getData(), true);

/* Before refactoring

 class Mysql
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(Mysql $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}
*/
