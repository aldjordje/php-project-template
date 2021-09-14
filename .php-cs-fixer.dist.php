<?php

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@PSR12' => true,
        '@PHP80Migration' => true,
        'ordered_class_elements' => ['sort_algorithm' => 'alpha'],
        'concat_space' => ['spacing' => 'one'],
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => [
                '|' => 'no_space'
            ]
        ],
        'array_indentation' => true,
        'combine_consecutive_issets' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'declare',
                'return',
                'throw',
                'try',
                'for',
                'foreach',
                'while',
                'do',
                'if',
                'switch',
            ]
        ]
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(['src', 'tests'])
    );
