<?php
declare(strict_types = 1);
namespace Larauto\Migrator;
interface  Parser {
    public function parse(string $filename);
}
