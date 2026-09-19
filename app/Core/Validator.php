<?php
namespace App\Core;

class Validator {
    protected array $errors = [];

    public function validate(array $data, array $rules): bool {
        // Validation logic
        return empty($this->errors);
    }

    public function errors(): array {
        return $this->errors;
    }
}
