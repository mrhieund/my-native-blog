<?php
namespace Modules\Storage;

interface StorageInterface {

    public function save(array $data);

    public function load($id);
}