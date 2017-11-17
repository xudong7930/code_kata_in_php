<?

class PrimeFactor {

    public function generate($number)
    {
        $primes = [];
        $candidate = 2;
        while ($number > 1) {
            while ($number % $candidate == 0) {
                $primes[] = $candidate;
                $number /= $candidate;
            }
            $candidate++;
        }

        if ($number > 1) {
            $primes[] = $number;
        }

        return $primes;
    }
}
