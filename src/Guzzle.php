<?php
/**
*	This file contains the Curl class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF;

use GuzzleHttp\Client;

/**
*	Curl Class
*
*	Class for sending the request over curl.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Guzzle {

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public static function send($strJSON, $strURL, $strCertFile, $strCertPass, $boolDebug = false){
        $client = new Client(array(
           'curl' => array(
                CURLOPT_CERTINFO => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
                CURLOPT_SSLCERT => $strCertFile,
                CURLOPT_SSLCERTTYPE => 'PEM',
                CURLOPT_SSLCERTPASSWD => $strCertPass,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
                CURLOPT_POSTFIELDS => $strJSON,
            ),
        ));
		return json_decode($client->request('POST', $strURL,['headers' => ['Accept'     => 'application/json']])->getBody());
	}
}