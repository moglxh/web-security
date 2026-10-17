<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$action = $_GET['action'] ?? '';

$logEntry = [
    'timestamp' => date(DATE_ATOM),
    'action' => is_string($action) ? $action : 'invalid_type',
];

switch ($action) {
    case 'status':
        $result = [
            'application' => 'ScorpioShell',
            'status' => 'running',
            'php_version' => PHP_VERSION,
        ];
        break;

    case 'time':
        $result = [
            'server_time' => date(DATE_ATOM),
        ];
        break;

    default:
        http_response_code(400);
        $result = [
            'error' => 'Unknown action',
            'allowed_actions' => ['status', 'time'],
        ];
}

$logEntry['http_status'] = http_response_code() ?: 200;

file_put_contents(
    __DIR__ . '/access.jsonl',
    json_encode($logEntry, JSON_UNESCAPED_SLASHES) . "\n",
    FILE_APPEND | LOCK_EX
);

echo json_encode($result, JSON_PRETTY_PRINT);
echo "\n";
