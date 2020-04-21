<?php

namespace ricmin\FlatArray;

class FlatArray
{
    /**
     * @var array
     */
    private $result;

    public function __construct()
    {
        $this->result = [];
    }
    
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @var mixed $value
     */
    private function addResult($value): void
    {
        $this->result[] = $value;
    }

    /**
     * @param array $input
     */
    public function flatArray($input): void
    {
        if (is_array($input)) {
            foreach ($input as $elem) {
                // Finds whether a variable is a number or a numeric string
                if (is_numeric($elem)) {
                    // Get the integer value of $elem
                    $value = intval($elem);
                    $this->addResult($value);
                }
                $this->flatArray($elem);
            }
        }
    }
}

/* $input = [[1, 2, [3]], 4, [[[5, [6]]]]];
$flatter = new FlatArray();
$flatter->flatArray($input);
$result = $flatter->getResult();
print_r($result); */