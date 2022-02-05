<?php

it('creates a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
                'name' => 'Category Product',
            ])
            ->assertExitCode(0);
});

it('has --controller flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
        'name' => 'Category Invoice',
        '--controller' => true,
    ])
        ->assertExitCode(0);
});

it('has --factory flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
            'name' => 'Category Invoice',
            '--factory' => true,
        ])
        ->assertExitCode(0);
});

it('has --force flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
        'name' => 'Category Invoice',
        '--force' => true,
    ])
        ->assertExitCode(0);
});

it('has --migration flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
        'name' => 'Category Invoice',
        '--migration' => true,
    ])
        ->assertExitCode(0);
});

it('has --policy flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
            'name' => 'Category Invoice',
            '--policy' => true,
        ])
        ->assertExitCode(0);
});

it('has --seed flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
        'name' => 'Category Invoice',
        '--seed' => true,
    ])
        ->assertExitCode(0);
});

it('has --pivot flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
        'name' => 'Category Invoice',
        '--pivot' => true,
    ])
        ->assertExitCode(0);
});

it('has --resource flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
            'name' => 'Category Invoice',
            '--resource' => true,
        ])
        ->assertExitCode(0);
});

it('has --api flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
            'name' => 'Category Invoice',
            '--api' => true,
        ])
        ->assertExitCode(0);
});

it('has --requests flag when creating a new eloquent model class', function () {
    $this->artisan('laracommand:make-model', [
            'name' => 'Category Invoice',
            '--requests' => true,
        ])
        ->assertExitCode(0);
});
