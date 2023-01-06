<?php
declare (strict_types = 1);

namespace Larauto\Utils;
use ErrorException;

/*
 *   Basic Filesystem that you can manage your files/directories.
 */
class FileSystem {
    public static function isExist(string $filepath): bool {
        return is_File($filepath) || is_dir($filepath);
    }

    public static function isDirectory(string $filepath): bool {
        return is_dir($filepath);
    }

    public static function delete(string $filepath): bool {
        if (!self::isExist($filepath))
            return false;

        if (self::isDirectory($filepath)) {
            return rmdir($filepath);
        } else {
            return unlink($filepath);
        }

    }

    public static function createDirectory(string $directorypath, int $permission = 0777): bool {
        if (self::isExist($directorypath)) {
            return false;
        }

        $info = pathinfo($directorypath);
        if (array_key_exists('extension', $info)) {
            return false;
        }

        return mkdir($directorypath, $permission, true);
    }

    public static function createFile(string $directory, string $filename): bool {
        if (substr($directory, -1) !== "/") {
            $directory .= '/';
        }

        $fullpath = $directory . $filename;
        if (self::isExist($fullpath)) {
            throw new ErrorException("Given file " . $filename . " already exist  on " . $directory . "!");
        }

        $file = fopen($fullpath, "w");
        return true;
    }

}
