<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="L5 OpenApi",
     *      description="L5 Swagger OpenApi description",

     * )
     */

    /**
     *  @OA\Server(
     *      url="http://bform.test",
     *      description="L5 Swagger OpenApi dynamic host server"
     *  )
     *
     *  @OA\Server(
     *      url="http://bform.test",
     *      description="L5 Swagger OpenApi Server"
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
