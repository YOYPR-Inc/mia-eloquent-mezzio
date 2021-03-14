<?php namespace Mia\Database\Command;

use Illuminate\Database\Migrations\DatabaseMigrationRepository;
use Illuminate\Database\Migrations\Migrator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Filesystem\Filesystem;

/**
 * Description of BaseCommand
 *
 * @author matiascamiletti
 */
class MigrateCommand extends BaseMigrationCommand
{
    public function run()
    {
        $this->migrator->run([
            'database/migrations'
        ]);
    }
}