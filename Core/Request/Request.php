<?php declare(strict_types=1);
namespace Ifthenpay\Core\Request;



use GuzzleHttp\Message\Response;
use PrestaShop\Module\Ifthenpay\Factory\Request\RequestFactory;

class Request
{
    private $client;
    private $response;

    public function __construct($headers = [])
    {
        $this->client = RequestFactory::buildClient($headers);
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getResponseJson()
    {
        return json_decode(json_encode(json_decode((string) $this->response->getBody())), true);
    }

    public function postRequest($url, $data, $jsonContentType = false)
    {
        try {
            $this->response = $this->client->post(
                $url,
                $jsonContentType ? ['json' => $data] :
                ['body' => $data]
            );
            return $this;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getRequest($url, $data = [])
    {
        try {
            $this->response = $this->client->get($url, ['query' => $data]);
            return $this;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
