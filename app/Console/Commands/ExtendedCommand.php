<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class ExtendedCommand extends Command
{
    protected static $appName;

    protected $description = 'Basic extended command class. Do not run this command.';

    public function __construct($name = 'abstract')
    {
        static::$appName = Config::get('app.name');
        $this->signature = static::$appName . ':' . $name;
        parent::__construct();
    }
}
