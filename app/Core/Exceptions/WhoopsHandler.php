<?php

namespace Core\Exceptions;
 
use Exception;
use Illuminate\Http\Response;
use Core\Exceptions\Handler as BaseExceptionHandler;
 
 /**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * https://github.com/filp/whoops
 * https://gist.github.com/brunowerneck/ca4d249884048e64db13
 */
class WhoopsHandler extends BaseExceptionHandler
{
    /**
     * Render an exception into a response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {
        $whoops = new \Whoops\Run;
 
        if ($request->ajax()) {
            $whoops->pushHandler(new \Whoops\Handler\JsonResponseHandler());

            return new Response($whoops->handleException($e), $e->getStatusCode(), $e->getHeaders());
        }

        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
 
        return new Response($whoops->handleException($e), $e->getStatusCode(), $e->getHeaders());
    }
}
