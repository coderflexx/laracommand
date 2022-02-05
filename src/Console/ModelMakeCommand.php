<?php

namespace Coderflex\LaraCommand\Console;

class ModelMakeCommand extends \Illuminate\Foundation\Console\ModelMakeCommand
{
    use Concerns\InteractsWithConsoleCommands;

    /**
     * @var string The console command name
     */
    protected $name = 'laracommand:make-model';

    /**
     * @var string The console command description
     */
    protected $description = 'Create a new Eloquent model class/classes';

    /**
     * Execute the console command.
     * @return int
     */
    public function handle(): int
    {
        // return exit code of 0
        if (
            $this->loopThroughNameArgumentWith('make:model')
        ) {
            return self::SUCCESS;
        }

        return self::FAILURE;
    }
}
