<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache\Logging; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheKey; use MailPoetVendor\Doctrine\ORM\Cache\EntityCacheKey; use MailPoetVendor\Doctrine\ORM\Cache\QueryCacheKey; class CacheLoggerChain implements \MailPoetVendor\Doctrine\ORM\Cache\Logging\CacheLogger { private $loggers = array(); public function setLogger($name, \MailPoetVendor\Doctrine\ORM\Cache\Logging\CacheLogger $logger) { $this->loggers[$name] = $logger; } public function getLogger($name) { return isset($this->loggers[$name]) ? $this->loggers[$name] : null; } public function getLoggers() { return $this->loggers; } public function collectionCacheHit($regionName, \MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheKey $key) { foreach ($this->loggers as $logger) { $logger->collectionCacheHit($regionName, $key); } } public function collectionCacheMiss($regionName, \MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheKey $key) { foreach ($this->loggers as $logger) { $logger->collectionCacheMiss($regionName, $key); } } public function collectionCachePut($regionName, \MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheKey $key) { foreach ($this->loggers as $logger) { $logger->collectionCachePut($regionName, $key); } } public function entityCacheHit($regionName, \MailPoetVendor\Doctrine\ORM\Cache\EntityCacheKey $key) { foreach ($this->loggers as $logger) { $logger->entityCacheHit($regionName, $key); } } public function entityCacheMiss($regionName, \MailPoetVendor\Doctrine\ORM\Cache\EntityCacheKey $key) { foreach ($this->loggers as $logger) { $logger->entityCacheMiss($regionName, $key); } } public function entityCachePut($regionName, \MailPoetVendor\Doctrine\ORM\Cache\EntityCacheKey $key) { foreach ($this->loggers as $logger) { $logger->entityCachePut($regionName, $key); } } public function queryCacheHit($regionName, \MailPoetVendor\Doctrine\ORM\Cache\QueryCacheKey $key) { foreach ($this->loggers as $logger) { $logger->queryCacheHit($regionName, $key); } } public function queryCacheMiss($regionName, \MailPoetVendor\Doctrine\ORM\Cache\QueryCacheKey $key) { foreach ($this->loggers as $logger) { $logger->queryCacheMiss($regionName, $key); } } public function queryCachePut($regionName, \MailPoetVendor\Doctrine\ORM\Cache\QueryCacheKey $key) { foreach ($this->loggers as $logger) { $logger->queryCachePut($regionName, $key); } } } 