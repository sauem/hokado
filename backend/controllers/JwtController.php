<?php


namespace backend\controllers;


use Composer\Util\Http\Response;
use sizeg\jwt\Jwt;
use sizeg\jwt\JwtHttpBearerAuth;

class JwtController extends BaseController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
//        $behaviors['authenticator'] = [
//            'class' => \sizeg\jwt\JwtHttpBearerAuth::class,
//        ];

        return $behaviors;
    }

    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $jwt = \Yii::$app->jwt;
        $signer = $jwt->getSigner('HS256');
        $key = $jwt->getKey(JWT_SECRET);
        $time = time();
        $expireTime = $time + (3600 * 24 * 30);
        $token = $jwt->getBuilder()
            ->issuedAt($time) // Configures the time that the token was issue (iat claim)
            ->canOnlyBeUsedAfter($expireTime) // Configures the time that the token can be used (nbf claim)
            ->expiresAt($expireTime) // Configures the expiration time of the token (exp claim)
            ->withClaim('uid', 1) // Configures a new claim, called "uid"
//            ->withClaim('email', $this->email) // Configures a new claim, called "uid"
//            ->withClaim('phone', $this->phone) // Configures a new claim, called "uid"
//            ->withClaim('status', $this->status) // Configures a new claim, called "uid"
//            ->withClaim('full_name', $this->full_name)
//            ->withClaim('role', $this->note) // TODO Update role
            ->getToken($signer, $key); // Retrieves the generated token
        return ['token' => $token->__toString()];
    }
}
