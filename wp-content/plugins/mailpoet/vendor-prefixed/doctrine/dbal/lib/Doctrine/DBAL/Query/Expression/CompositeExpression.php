<?php
 namespace MailPoetVendor\Doctrine\DBAL\Query\Expression; if (!defined('ABSPATH')) exit; class CompositeExpression implements \Countable { const TYPE_AND = 'AND'; const TYPE_OR = 'OR'; private $type; private $parts = array(); public function __construct($type, array $parts = array()) { $this->type = $type; $this->addMultiple($parts); } public function addMultiple(array $parts = array()) { foreach ((array) $parts as $part) { $this->add($part); } return $this; } public function add($part) { if (!empty($part) || $part instanceof self && $part->count() > 0) { $this->parts[] = $part; } return $this; } public function count() { return \count($this->parts); } public function __toString() { if (\count($this->parts) === 1) { return (string) $this->parts[0]; } return '(' . \implode(') ' . $this->type . ' (', $this->parts) . ')'; } public function getType() { return $this->type; } } 