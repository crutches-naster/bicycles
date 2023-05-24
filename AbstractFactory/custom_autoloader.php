<?php

class CustomAutoloader
{
    protected static ?RecursiveIteratorIterator $fileIt = null; //Recursive files iterator

    public static function loaderCallback(string $className): void
    {
        $directory = new RecursiveDirectoryIterator(
            directory: __DIR__
        );

        if ( static::$fileIt == null ) {
            static::$fileIt = new RecursiveIteratorIterator(
                iterator: $directory,
                mode: RecursiveIteratorIterator::LEAVES_ONLY
            );
        }

        $filename = $className . '.php';

        foreach (static::$fileIt as $file) {

            if ( strtolower($filename) == strtolower($file->getFilename())) {
                include_once $file->getPathname();
                break;
            }
        }
    }
}

spl_autoload_register('CustomAutoloader::loaderCallback');
