<?php

class DataChain
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __get($key)
    {
        if (is_object($this->data)) {
            $data = isset($this->data->{$key}) ? $this->data->{$key} : null;
        } else {
            $data = (is_array($this->data) && array_key_exists($key, $this->data)) ? $this->data[$key] : null;
        }

        return new self($data);
    }

    public function value()
    {
        return $this->data;
    }
}