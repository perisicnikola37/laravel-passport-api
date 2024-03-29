<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    
    public function render() {
        // return [
        //     'error' => 'Product not belongs to user.'
        // ];
        return response(['error' => 'Product not belongs to user'], 406);
    }

}
