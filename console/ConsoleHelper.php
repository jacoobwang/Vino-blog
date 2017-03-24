<?php
namespace console;

class ConsoleHelper {

    public $color;

    public function isColorEnabled($stream = \STDOUT)
    {
        return $this->color === null ? Console::streamSupportsAnsiColors($stream) : $this->color;
    }

    public function stderr($string)
    {
        if ($this->isColorEnabled(\STDERR)) {
            $args = func_get_args();
            array_shift($args);
            $string = Console::ansiFormat($string, $args);
        }
        return fwrite(\STDERR, $string);
    }

    public function stdout($string)
    {
        if ($this->isColorEnabled()) {
            $args = func_get_args();
            array_shift($args);
            $string = Console::ansiFormat($string, $args);
        }
        return Console::stdout($string);
    }

    public function ansiFormat($string)
    {
        if ($this->isColorEnabled()) {
            $args = func_get_args();
            array_shift($args);
            $string = Console::ansiFormat($string, $args);
        }
        return $string;
    }
}

?>