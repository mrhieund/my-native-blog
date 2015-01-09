<?php
namespace Modules\Storage;

class File implements StorageInterface {

    protected $fileName;

    public function __construct($dependencies) {
        if (!empty($dependencies['file_name'])) {
            $this->fileName = $dependencies['file_name'];
        }
    }

    public function save(array $data) {
        return file_put_contents($this->fileName, var_export($data, true));
    }

    public function load($id) {
        return file_get_contents($this->fileName);
    }
}