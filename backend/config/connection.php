<?php
declare(strict_types=1);

require_once __DIR__ . '/../load_env.php';

class DatabaseConnection {
    private PDO $pdo;

    public function __construct() {
        $host = getenv('DB_HOST') ?: 'localhost';
        $port = getenv('DB_PORT') ?: '3306';
        $db   = getenv('DB_NAME') ?: 'u294866510_deliberation';
        $user = getenv('DB_USER') ?: 'u294866510_deliberation';
        $pass = getenv('DB_PASS') ?: '@Deliberation12';
        $charset = 'utf8mb4';

        $dsn = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options);
    }

    public function pdo(): PDO {
        return $this->pdo;
    }
}



