<?php
namespace Modules\Storage;

class File implements StorageInterface {

    const FILE_PATH = 'data/tmp/';

    protected $fileName;

    public function __construct($dependencies) {
        if (!empty($dependencies['file_name'])) {
            $this->fileName = APPLICATION_PATH . static::FILE_PATH . $dependencies['file_name'];
        }
    }

    public function save(array $data) {
        return file_put_contents($this->fileName, var_export($data, true));
    }

    public function load($id) {
        return file_get_contents($this->fileName);
    }
}