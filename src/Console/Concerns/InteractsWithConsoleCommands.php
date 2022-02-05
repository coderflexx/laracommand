<?php

namespace Coderflex\LaraCommand\Console\Concerns;

use Symfony\Component\Console\Input\InputArgument;

/**
 * Interact With Console Commands
 */
trait InteractsWithConsoleCommands
{
    /**
     * Loop through the name arguments and, create each record individualy
     * @param string $command
     * @return bool
     */
    public function loopThroughNameArgumentWith(string $command): bool
    {
        collect($this->argument('name'))->each(function ($name, $key) use ($command) {
            $this->line("Generating {$name} class\n");

            $this->call(
                $command,
                array_merge(['name' => $name], $this->getListOfOptions())
            );

            if (
                count(array_filter($this->getListOfOptions()))
            ) {
                $this->line("<options=bold,reverse;fg=green> {$name} assets created successfully.</>\n");
                $this->line("----------------------------------------------------------------\n");
            }
        });

        $this->line("<options=bold,reverse;fg=green> DONE </> 🤙\n");

        return true;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments(): array
    {
        return [
            ['name', InputArgument::IS_ARRAY, 'The name of the class'],
        ];
    }

    /**
     * Get the list of options
     *
     * @return array
     */
    private function getListOfOptions(): array
    {
        $options = [];

        collect($this->getOptions())->each(function ($option) use (&$options) {
            $key = reset($option);

            $options['--' . $key] = (bool) $this->option($key);
        });

        return $options;
    }
}
