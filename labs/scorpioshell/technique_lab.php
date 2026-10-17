<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$technique = $_GET['technique'] ?? '';

$cases = [
    'path-traversal' => [
        'technique' => 'Encoded path traversal',
        'example' => '%2e%2e%2f',
        'purpose' => 'Simulate detection of traversal patterns',
        'executed' => false,
    ],
    'command-substitution' => [
        'technique' => 'Shell command substitution',
        'example' => '$(COMMAND)',
        'purpose' => 'Identify command-substitution syntax',
        'executed' => false,
    ],
    'ifs-obfuscation' => [
        'technique' => 'Whitespace obfuscation',
        'example' => '${IFS}',
        'purpose' => 'Identify suspicious shell syntax',
        'executed' => false,
    ],
    'encoded-payload' => [
        'technique' => 'Base64 payload',
        'example' => '[synthetic encoded payload]',
        'purpose' => 'Simulate encoded-payload detection',
        'executed' => false,
    ],
    'endpoint-checks' => [
        'technique' => 'Repeated endpoint checks',
        'example' => 'Repeated requests to a test route',
        'purpose' => 'Study request-frequency detection',
        'executed' => false,
    ],
];

if (!is_string($technique) || !isset($cases[$technique])) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Unknown technique',
        'allowed_techniques' => array_keys($cases),
    ], JSON_PRETTY_PRINT);
    exit;
}

echo json_encode([
    'application' => 'ScorpioShell Technique Lab',
    'simulation' => $cases[$technique],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

echo "\n";
