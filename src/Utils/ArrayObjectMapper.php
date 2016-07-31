<?php

namespace Necowebs\Destiny\Utils;

/**
 * Class ArrayObjectMapper
 * @package Necowebs\Destiny\Utils
 */
class ArrayObjectMapper
{
    /**
     * @var string
     */
    private $className;

    /**
     * @var array
     */
    private $list;

    /**
     * ArrayObjectMapper constructor.
     * @param string $className
     */
    public function __construct($className)
    {
        $this->className = (string) $className;
    }

    /**
     * @param string $field
     * @return string
     */
    private function method($field)
    {
        return 'set' . ucfirst($field);
    }

    /**
     * @param string $field
     * @param string|null $method
     * @param string|callable|null $type
     * @return ArrayObjectMapper
     */
    public function add($field, $method = null, $type = null)
    {
        if (is_null($method)) {
            $method = $this->method($field);
        }

        $this->list[] = [
            'field' => (string) $field,
            'method' => $method,
            'type' => $type
        ];

        return $this;
    }

    /**
     * @return mixed
     */
    public function instantiate()
    {
        if (!class_exists($this->className)) {
            throw new \InvalidArgumentException('Class {$this->className} does not exist');
        }

        return new $this->className();
    }

    /**
     * @param $obj
     * @param array $entry
     * @param $value
     * @return mixed
     */
    public function evaluate($obj, array $entry, $value)
    {
        if ($entry['type'] && isset($value)) {
            $type = $entry['type'];
            if (is_callable($type)) {
                $args = array_merge([$obj, $value], $entry);
                $value = call_user_func_array($type, $args);
            } elseif (in_array($type, ['bool', 'int', 'float', 'string', 'array'])) {
                settype($value, $type);
            } elseif (class_exists($type)) {
                $value = new $type($value);
            }
        }

        return $value;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function map(array $data)
    {
        $obj = $this->instantiate();

        foreach ($this->list as $entry) {
            if (isset($data[$entry['field']])) {
                $value = $this->evaluate($obj, $entry, $data[$entry['field']]);

                if (method_exists($obj, $entry['method'])) {
                    $obj->{$entry['method']}($value);
                }
            }
        }

        return $obj;
    }
}
