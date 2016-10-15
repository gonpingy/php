<?php

class Sample
{
    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        if ($id) {
            return 123;
        }
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

    public function constructCopy()
    {
        $result = pg_query($conn, "SELECT name FROM dogs");
        if (!$result) {
            echo "Error!.\n";
            exit;
        }

        $arr = pg_fetch_all($result);

        $cnt = count($arr);
        for ($i = 0; $i < $cnt; $i++) {
            $key = key($arr[$i]);
            $data[$key][$i] = $arr[$i][$key];
        }

        pg_close($conn);
    }
}
