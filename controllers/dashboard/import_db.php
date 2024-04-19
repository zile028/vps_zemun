<?php
$db = \Core\App::resolve(\Core\Database::class);
try {
    $tables = $db->query("SELECT table_name
                        FROM information_schema.tables
                        WHERE table_schema = 'vps_sajt'")->find(PDO::FETCH_COLUMN);
    $db->query("DROP TABLE IF EXISTS " . implode(",", $tables));
    $sqlFile = __DIR__ . "/../../sql_tabel/vps_sajt.sql";
    $sqlImportStm = file_get_contents($sqlFile);
    $result = $db->pdo->exec($sqlImportStm);
    redirect("/dashboard");
    echo "Database is imported";
} catch (PDOException $e) {
    dd($e);
}

