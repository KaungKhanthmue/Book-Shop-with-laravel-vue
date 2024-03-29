<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
     $book= Book::all();
     return BookResource::collection($book);
    }
    public function store(Request $request)
    {
         $aa = Book::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'tag_id' =>$request->tag_id,
            'user_id' =>auth()->user()->id,
        ]);
        foreach ($request->file('images') as $image) {

            $imagePath = $image->storePublicly('images', 'public');
            $imageName = $image->getClientOriginalName();
            $imageFileType = $image->getClientOriginalExtension();

            $bb = $aa->images()->create([
                'name' => $imageName,
                'file_type' => $imageFileType,
                'image_type' => 'book',
                'url' => $imagePath,
            ]);
        }
        return response()->json([
            'status' => 'success',
        ]);
    }
    public function liked(Book $book)
    {
        $user= User::find(auth()->user()->id);
        $hasLiked = $user->likeBook()->wherePivot('book_id', $book->id)->exists();
    if($hasLiked)
    {
     $book->unlike($user->id);
     return 'liked book';
    }
    else{
     $book->like($user->id);
     return 'unlike book';
    }
    }
    // https://wap.kbzpay.com/pgw/uat/api/#/en/docs/QRPay/faq-
//     <?php

// namespace App\Payment;

// use App\Models\Order;
// use App\Payment\Contracts\PaymentService;
// use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Str;

// class KPayService implements PaymentService
// {
//     private string $merchantId;

//     private string $secretKey;

//     private string $appId;

//     private string $callbackUrl;

//     private string $endpoint;

//     public function __construct()
//     {
//         $this->setUp();
//     }

//     public function pay(Order $order): array
//     {
//         $order->refresh();

//         $timestamp = (string) now()->timestamp;
//         $orderId = (string) Str::replace('-', '', $order->number);
//         $orderId = (string) $order->number;
//         $nonceStr = (string) Str::random(32);
//         $totalAmount = (string) round($order->total_price, 0);
//         $description = (string) 'Nat Panchi';
//         $callbackInfo = 'natpanchi';
//         $method = 'kbz.payment.precreate';
//         $signType = 'SHA256';
//         $currency = 'MMK';
//         $version = '1.0';
//         $tradeType = 'PAY_BY_QRCODE';

//         $this->callbackUrl =  'https://npcbackend.zacompany.dev/api/payment/callback/k-pay';


//         $signString = "appid={$this->appId}&callback_info={$callbackInfo}&merch_code={$this->merchantId}&merch_order_id={$orderId}&method={$method}&nonce_str={$nonceStr}&notify_url={$this->callbackUrl}&timeout_express=100m&timestamp={$timestamp}&title={$description}&total_amount={$totalAmount}&trade_type={$tradeType}&trans_currency={$currency}&version={$version}&key={$this->secretKey}";
//         $sign = Str::upper(hash('sha256', $signString));

//         $payload = [
//             'Request' => [
//                 'timestamp' => $timestamp,
//                 'notify_url' => $this->callbackUrl,
//                 'nonce_str' => $nonceStr,
//                 'method' => $method,
//                 'sign_type' => $signType,
//                 'sign' => $sign,
//                 'version' => $version,
//                 'biz_content' => [
//                     'appid' => $this->appId,
//                     'merch_code' => $this->merchantId,
//                     'merch_order_id' => $orderId,
//                     'trade_type' => $tradeType,
//                     'title' => $description,
//                     'total_amount' => $totalAmount,
//                     'trans_currency' => $currency,
//                     'timeout_express' => '100m',
//                     'callback_info' => $callbackInfo,
//                 ],
//             ],
//         ];

//         // dd(json_encode($payload));

//         $response = Http::acceptJson()
//             ->post($this->endpoint, $payload);
//         // dd($payload, $response->json(), json_encode($payload));
//         if (! $response->ok() || optional($response->json()['Response'])['result'] == 'FAIL') {
//             abort(503, config('payments.k_pay.error_message'));
//         }

//         $response = $response->json('Response');
//         $signStr = "appid={$this->appId}&merch_code={$this->merchantId}&nonce_str={$nonceStr}&prepay_id={$response['prepay_id']}
//         &timestamp={$timestamp}";
//         $sign = strtoupper(hash('sha256', ($signStr."&key={$this->secretKey}")));

//         return [
//             'order_id' => $order->id,
//             'status' => $order->status,
//             'transaction_ref' => $response['prepay_id'],
//             'qr_code' => $response['qrCode'],
//         ];
//     }

//     private function setUp(): void
//     {
//         $this->endpoint = 'https://api.kbzpay.com/payment/gateway/precreate';
//         $this->merchantId = config('payments.k_pay.merchant_id');
//         $this->secretKey = config('payments.k_pay.secret_key');
//         $this->appId = config('payments.k_pay.app_id');
//         $this->callbackUrl = config('payments.k_pay.callback_url');
//     }
    ///////////////////////////////
//     <?php

// namespace Ds\Core;

// use GuzzleHttp\Client as GuzzleClient;
// use GuzzleHttp\Exception\ClientException;
// use GuzzleHttp\Exception\ServerException;
// use Illuminate\Http\Request;
// use Illuminate\Validation\ValidationException;
// use Symfony\Component\HttpFoundation\File\UploadedFile;

// class ApiClient
// {
//     public static $xAppName;

//     protected $endpoint;

//     protected $client;

//     protected $request;

//     protected $apiToken;

//     protected $zaOnlyToken;

//     protected $userIdHash;

//     protected $response;

//     protected $stringbody;

//     protected $statusCode;

//     protected $responseContent;

//     protected $headers;

//     public function __construct(Request $request, $endpoint, $apiToken = null)
//     {
//         $this->client = $this->getGuzzleClient($endpoint);
//         $this->request = $request;
//         $this->apiToken = $apiToken;
//     }

//     public function header(array $header)
//     {
//         $this->headers = $header;

//         return $this;
//     }

//     public function zaToken($token)
//     {
//         $this->zaOnlyToken = $token;

//         return $this;
//     }

//     public function userHash($hash)
//     {
//         $this->userIdHash = $hash;

//         return $this;
//     }

//     public function get($uri = '', array $query = [], array $options = [])
//     {
//         $options['query'] = $query;

//         return $this->call('GET', $uri, $options);
//     }

//     public function post($uri = '', array $inputs = [], array $options = [])
//     {
//         if (! empty($inputs)) {
//             $options['form_params'] = $inputs;
//         }

//         return $this->call('POST', $uri, $options);
//     }

//     public function put($uri = '', array $inputs = [], array $options = [])
//     {
//         if (! empty($inputs)) {
//             $options['form_params'] = $inputs;
//         }

//         return $this->call('PUT', $uri, $options);
//     }

//     public function delete($uri = '', array $options = [])
//     {
//         return $this->call('DELETE', $uri, $options);
//     }

//     public function call($method, $uri = '', array $options = [])
//     {
//         $this->stringbody = '';
//         $options['headers'] = $this->getRequestHeaders($options);

//         if (isset($options['query'])) {
//             $options['query'] = $options['query'] + $this->getQueryFromOrginalRequest();
//         } else {
//             $options['query'] = $this->getQueryFromOrginalRequest();
//         }

//         $options['connect_timeout'] = 10.0;
//         // Set api security key to request header
//         if (is_array($this->apiToken)) {
//             $options['headers'] = array_merge($options['headers'], $this->apiToken);
//         } elseif ($this->apiToken) {
//             $options['headers']['X-API-TOKEN'] = $this->apiToken;
//             //$options['headers']['X-API-KEY'] = $this->apiToken;
//         }

//         // Set Za Request Only API Token for agent/myanmarpost/merchant
//         if ($this->zaOnlyToken) {
//             $options['headers']['X-TOKEN-ZA'] = $this->zaOnlyToken;
//         }

//         // Set Hash value of login user for request throtle problem
//         if ($this->userIdHash) {
//             $options['headers']['X-USER-HASH'] = $this->userIdHash;
//         }

//         if ($this->isFileUpload()) {
//             return $this->sendMultiplePart($method, $uri, $options);
//         }

//         return $this->send($method, $uri, $options);
//     }

//     public function isSuccess()
//     {
//         return $this->statusCode !== null && ($this->statusCode == 200 || $this->statusCode < 300);
//     }

//     public function getStatusCode()
//     {
//         return $this->statusCode;
//     }

//     public function getResponse()
//     {
//         return $this->response;
//     }

//     public function getContent()
//     {
//         return $this->responseContent;
//     }

//     protected function isFileUpload()
//     {
//         return count($this->request->allFiles()) > 0;
//     }

//     protected function sendMultiplePart($method, $uri, $options)
//     {
//         $multipart = [];

//         foreach ($options['form_params'] as $name => $value) {
//             if ($value instanceof UploadedFile) {
//                 $multipart[] = [
//                     'name' => $name,
//                     'contents' => file_get_contents($value->getPathname()),
//                     'filename' => $value->getClientOriginalName(),
//                 ];
//             } else {
//                 $multipart[] = [
//                     'name' => $name,
//                     'contents' => is_array($value) ? json_encode($value) : $value,
//                 ];
//             }
//         }
//         unset($options['form_params']);
//         $options['multipart'] = $multipart;
//         // Remove content type and guzzle will be auto set for multipart/form-date: BOUNDARY
//         unset($options['headers']['content-type']);

//         return $this->send($method, $uri, $options);
//     }

//     protected function send($method, $uri, $options)
//     {
//         // Temp add ofr curl ssl issue
//         $options['verify'] = false;

//         try {
//             $this->response = $response = $this->client->request($method, $uri, $options);
//             $this->statusCode = $code = $response->getStatusCode();
//             if ($code == 200 || $code < 300) {
//                 $this->stringbody = (string) $response->getBody();
//             }
//         } catch (ClientException $e) {
//             $this->handleException($e);
//         } catch (ServerException $e) {
//             $this->handleException($e);
//         } finally {
//             $this->responseContent = $this->stringbody;
//             if (! is_null($this->response) && in_array('application/json', $this->response->getHeader('Content-Type'))) {
//                 $this->responseContent = json_decode($this->stringbody, true);
//                 // Handling for validation exception
//                 if ($this->response->getStatusCode() === 422) {
//                     $errors = isset($this->responseContent['errors']) ? $this->responseContent['errors'] : $this->responseContent;
//                     throw ValidationException::withMessages($errors);
//                 }

//                 if ($this->statusCode >= 200 && $this->statusCode < 300) {
//                     return $this->responseContent;
//                 }

//                 abort($this->statusCode, parseToArray($this->responseContent)['message']);
//             }

//             return $this->responseContent;
//         }

//         return false;
//     }

//     protected function getRequestHeaders($options)
//     {
//         $headers = [];
//         if (isset($options['headers'])) {
//             $headers = $options['headers'] + $this->getHeadersFromOriginalRequest();
//         } else {
//             $headers = $this->getHeadersFromOriginalRequest();
//         }

//         // If X-APP (header for slack error message log) is not null,
//         // pass this name to request
//         if (static::$xAppName) {
//             $headers = $headers + ['X-APP' => static::$xAppName];
//         }

//         return $this->headers ? $this->headers + $headers : $headers;
//     }

//     protected function getQueryFromOrginalRequest()
//     {
//         return $this->request->query();
//     }

//     protected function getHeadersFromOriginalRequest()
//     {
//         $results['content-type'] = 'application/x-www-form-urlencoded';

//         $keys = ['user-agent', 'accept-encoding', 'accept', 'accept-language'];

//         $headers = $this->request->header();

//         foreach ($keys as $key) {
//             if (isset($headers[$key])) {
//                 $results[$key] = $headers[$key];
//             }
//         }

//         return $results;
//     }

//     protected function handleException($e)
//     {
//         if ($e->hasResponse()) {
//             $this->response = $response = $e->getResponse();
//             $this->stringbody = $response->getBody()->getContents();
//             $this->statusCode = $response->getStatusCode();
//         }
//     }

//     protected function getGuzzleClient($endpoint)
//     {
//         $headers = [];
//         if (is_array($endpoint)) {
//             $headers = $endpoint['headers'];
//             $endpoint = $endpoint['url'];
//         }

//         return new GuzzleClient([
//             'base_uri' => $endpoint,
//             'headers' => $headers,
//         ]);
//     }
// }

// }



}
