<?php namespace Mia\Database\Command;

/**
 * Description of BaseCommand
 *
 * @author matiascamiletti
 */
class SeedCommand extends BaseMigrationCommand
{
    public function run()
    {
        foreach (glob('database/seeders/*.php') as $file){
            require_once $file;
            // get the file name of the current file without the extension
            // which is essentially the class name
            $class = basename($file, '.php');
            
            if (class_exists($class)) {
                $obj = new $class;
                $obj->run();
            }
        }
    }
}