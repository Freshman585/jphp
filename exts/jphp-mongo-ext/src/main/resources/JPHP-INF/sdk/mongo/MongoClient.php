<?php
namespace mongo;

/**
 * Class MongoClient
 * @package mongo
 */
class MongoClient
{
    /**
     * MongoClient constructor.
     * @param string $host
     * @param int $port
     */
    public function __construct(string $host = '127.0.0.1', int $port = 27017)
    {
    }

    /**
     * @param string $name
     * @return MongoDatabase
     */
    public function database(string $name): MongoDatabase
    {
    }

    public function close()
    {
    }
}