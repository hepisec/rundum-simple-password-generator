<?php

namespace Rundum\SimplePasswordGenerator;

/**
 * @author Hendrik Pilz <pilz@rundum.digital>
 */
class SimplePasswordGenerator {

    /**
     * Create a random authentication key containing numbers and lower case letters with a length of 32 characters
     *
     * @return string
     */
    public static function randomAuthKey(): string {
        return $this->randomPassword(32, false, false);
    }

    /**
     * Create a random password
     *
     * @param int $length set the length of the password
     * @param bool $includeUpperCase set to true to include upper case characters
     * @param bool $includeSymbols set to true to include symbols
     * @return string
     */
    public static function randomPassword(int $length = 12, bool $includeUpperCase = true, bool $includeSymbols = true): string {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';

        if ($includeUpperCase) {
            $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        if ($includeSymbols) {
            $characters .= '!?%&@$';
        }

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

}
