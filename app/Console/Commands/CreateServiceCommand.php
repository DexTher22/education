<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class CreateServiceCommand extends GeneratorCommand{
   
    protected $signature = 'make:service {name}';

    
    protected $description = 'Create a new service';

    protected function getStub() {

        return base_path("stubs/service.stub");
    }

    protected function getDefaultNamespace($rootNamespace) {
        
        return $rootNamespace . "\services";
    }

    
}
