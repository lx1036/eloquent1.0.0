<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/25
 * Time: 22:05
 */

require_once __DIR__.'/vendor/autoload.php';

use Illuminate\Database\Query\Builder;
use Mockery as m;

$interface = m::mock('Illuminate\Database\ConnectionInterface');
$grammar = new \Illuminate\Database\Query\Grammars\Grammar();
$processor = m::mock('Illuminate\Database\Query\Processors\Processor');
$builder = new Builder($interface, $grammar, $processor);

$sql = $builder->select('*')->from('char_test')->toSql();
var_dump($sql);