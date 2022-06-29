<?php 

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait {

    public function apiException($request, $e) {

        if ($request->exceptsJson()) {
            
            if($e instanceOf ModelNotFoundException) {

                return response(['error' => 'Model not found'], 500);
                // return response()->json('Model not found', 404);
    
            } 

            if ($e instanceOf NotFoundHttpException) {
                
                return response(['error' => 'Incorrect route']);

            }

        }

    }

}
















; ?>
