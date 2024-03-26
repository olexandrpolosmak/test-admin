<?php
/**
 * Description of TestCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Console\Commands;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:login';


    public function handle(): void
    {

        $client = new Client();
        $response = $client->request('POST', 'http://students-competition.test/auth/account/login', [
            'form_params' => [
                'email' => 'sanya@gmail.com',
                'password' => '123'
            ],
            'allow_redirects' => false ,
            'headers' => [
                // 'Cookie' => 'dotsdev_session=eyJpdiI6ImhhMWZlanRZZkYxZzlweWZpSFZqTmc9PSIsInZhbHVlIjoicTlVTVJ5YkI1eHF2NE90V1RaSnAycXNDRnh5Q29ORGR4SEp6UXpkdGxZOEJVVmdGRWw1SUxTRjRHSy91NnVleVZ6L1NXSkxXVWx4a0pyRFFMd3JpQUtnZHhxVFFMQU1EQmN4cDY4RFlRK1RMWE55NkJ1WlZYTVY4R2EzaTFHdUUiLCJtYWMiOiIyY2U1NTZiOGZkYjI3NDdhMDA1MWQyZmM4MDFmZjdjYjI2NmE0NmM1YTYxZmQxNjhkMWNmY2E2MTMzYzg5YzVmIiwidGFnIjoiIn0%3D; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6InVGajlrcTBzS0p2NGxFbFBYUytwcHc9PSIsInZhbHVlIjoiVEdjMUxtM0RtTEJyTDNsUVBXc2RUV1pCL2ZOaGhmWWFEcTBtc09wazhGcEUwOVVOcjBmREJBSm45QVY5bnN5bnNxampyMmZkSXRkMGNjaUhBWGliZzJMa3QyeWxud3pObjgxSnBaUHlOZUdDa0JDWk1KSXE2elVVUUU4R3MyQW02ODBJZTBVQkZMeTBtWmFLYUpidmtKT1MzUGw0cjgwTVZnUG80RzRFMlNnSVQ3N3lJRUlYTk9DS0ZyeTRZU0FYTTAreG9PK2xZeEd3ZjgxSUxaNCtCQlhwaGdqZkkxb2ErRTJpWndYWUpoZz0iLCJtYWMiOiJjMmRlZmVkMWVjMTdiNDFjY2UzMDgzOWM5YmNmYWU5NjNjYmRlY2QyNGM3ZTQ4ZTkwOWVjOTU4NWRmZWQ4OThlIiwidGFnIjoiIn0%3D'
            ]
        ]);
        dd($response->getBody()->getContents() );
    }

    private function getClient(): Client
    {
        return new Client([
            'base_uri' => 'http://admin.dots.test',
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'multipart/form-data',
            ],
        ]);
    }

    private function success()
    {
        $client = new Client();
        $response = $client->request('POST', 'http://admin.dots.test/ru/auth/login-by-email', [
            'form_params' => [
                'account' => 'ma',
                'email' => 'oleksandr.polosmak@dotsplatform.com',
                'password' => 'oleksandr.polosmak@dotsplatform.com'
            ],
            'allow_redirects' => false ,
            'headers' => [
                // 'Cookie' => 'dotsdev_session=eyJpdiI6ImhhMWZlanRZZkYxZzlweWZpSFZqTmc9PSIsInZhbHVlIjoicTlVTVJ5YkI1eHF2NE90V1RaSnAycXNDRnh5Q29ORGR4SEp6UXpkdGxZOEJVVmdGRWw1SUxTRjRHSy91NnVleVZ6L1NXSkxXVWx4a0pyRFFMd3JpQUtnZHhxVFFMQU1EQmN4cDY4RFlRK1RMWE55NkJ1WlZYTVY4R2EzaTFHdUUiLCJtYWMiOiIyY2U1NTZiOGZkYjI3NDdhMDA1MWQyZmM4MDFmZjdjYjI2NmE0NmM1YTYxZmQxNjhkMWNmY2E2MTMzYzg5YzVmIiwidGFnIjoiIn0%3D; remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6InVGajlrcTBzS0p2NGxFbFBYUytwcHc9PSIsInZhbHVlIjoiVEdjMUxtM0RtTEJyTDNsUVBXc2RUV1pCL2ZOaGhmWWFEcTBtc09wazhGcEUwOVVOcjBmREJBSm45QVY5bnN5bnNxampyMmZkSXRkMGNjaUhBWGliZzJMa3QyeWxud3pObjgxSnBaUHlOZUdDa0JDWk1KSXE2elVVUUU4R3MyQW02ODBJZTBVQkZMeTBtWmFLYUpidmtKT1MzUGw0cjgwTVZnUG80RzRFMlNnSVQ3N3lJRUlYTk9DS0ZyeTRZU0FYTTAreG9PK2xZeEd3ZjgxSUxaNCtCQlhwaGdqZkkxb2ErRTJpWndYWUpoZz0iLCJtYWMiOiJjMmRlZmVkMWVjMTdiNDFjY2UzMDgzOWM5YmNmYWU5NjNjYmRlY2QyNGM3ZTQ4ZTkwOWVjOTU4NWRmZWQ4OThlIiwidGFnIjoiIn0%3D'
            ]
        ]);
        dd($response->getStatusCode() );
    }
}
