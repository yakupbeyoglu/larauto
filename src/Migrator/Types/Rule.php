<?php
declare(strict_types = 1);

namespace Larauto\Migrator;
class Rule {
    public function __construct(public  string $name, 
    public string $type, 
    public int $length = -1,
    public string $after = "",
    public string $reference = "",
    public string $on = "",
    public string $on_update = "cascade",
    public string $on_delete = "cascade",
    public float $min = PHP_FLOAT_MIN,
    public float $max = PHP_FLOAT_MAX,
    public bool $unsigned = false,
    public bool $nullable = false,
    public bool $invisible = false) {    }
}
