<?php

namespace App\Rules\Mechanic;

use App\Models\Mechanic;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MechanicOrderLimit implements ValidationRule
{
    protected $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    /**
     * Run the validation rule.
     *
     * @param \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(
        string $attribute,
        mixed $value,
        Closure $fail
    ): void {
        $mechanic = Mechanic::findOrFail($value);
        if ($mechanic->amount_of_orders >= $this->limit) {
            $fail('Limit reached');
        }
    }
}
