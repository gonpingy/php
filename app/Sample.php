<?php

class Sample {
    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        if (is_int($id)) {
            $this->id = $id;
            $this->name = $name;
        } else {
            throw new InvalidArgumentException();
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
