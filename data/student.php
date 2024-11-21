<?php

class student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setsample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
            echo "invoke student with arguments $join \n";
    }
}
