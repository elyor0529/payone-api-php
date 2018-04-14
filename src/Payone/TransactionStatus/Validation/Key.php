<?php


namespace Payone\TransactionStatus\Validation;


use Payone\TransactionStatus\Exceptions\InvalidKey;

class Key {

    /**
     * @param $local_key
     * @param $payone_key
     * @throws InvalidKey
     */
    static function validate($local_key, $payone_key){

        if(!hash_equals(hash('sha384', $local_key), $payone_key)){
            throw new InvalidKey('Invalid Key');
        };
    }

}