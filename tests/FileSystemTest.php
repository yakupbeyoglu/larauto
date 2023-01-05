<?php
declare (strict_types = 1);
use Larauto\Utils\FileSystem;
use PHPUnit\Framework\TestCase;

final class FileSystemTest extends TestCase {
    public function testIsExist(): void {
        $this->assertEquals(FileSystem::isExist('../src/Utils/a/'), false);
    }

    public function testCreateDirectory(): void {
        $is_created = FileSystem::createDirectory('Hello/');
        $this->assertEquals($is_created, true);
        $this->assertEquals(FileSystem::isExist('Hello/'), true);

    }

    public function testIsDirectory():void {
        $this->assertEquals(FileSystem::isDirectory('Hello/'), true);
        $this->assertEquals(Filesystem::isDirectory('../src/Utils/FileSystem.php'), false);
    }

    public function testDeleteDirectory(): void {
        $this->assertEquals(FileSystem::delete('Hello'), true);
        $this->assertEquals(FileSystem::isExist('Hello'), false);
    }

    public function testCreateFile(): void {
        $this->assertEquals(FileSystem::createFile(".", "larauto.txt"), true);
        $this->assertEquals(FileSystem::isExist('./larauto.txt'), true);

    }

    public function testDeleteFile():void {
        $is_deleted = FileSystem::delete('larauto.txt');
        $this->assertEquals($is_deleted, true);
        $this->assertEquals(FileSystem::isExist('./larauto.txt'), false);
    }
}
