<?php


namespace App\Contracts;


use Illuminate\Http\Response;

trait ResponseTrait
{
    public function respondSuccess($data = [], $code = Response::HTTP_OK)
    {
        return response()
            ->json([
                'success' => true,
                'code' => $code,
                'data' => $data
            ], $code);
    }

    public function respondError($message = 'Bad request', $code = Response::HTTP_BAD_REQUEST)
    {
        return response()
            ->json([
                'success' => false,
                'code' => $code,
                'message' => $message
            ], $code);
    }

    public function respondNoContent($code = Response::HTTP_NO_CONTENT)
    {
        return response()
            ->json([
                'success' => true,
                'code' => $code
            ], $code);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
