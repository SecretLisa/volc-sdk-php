<?php

namespace Volc\Service;

use Volc\Base\V4Curl;

class Visual extends V4Curl
{
    protected function getConfig(string $region = '')
    {
        return [
            'host' => 'https://visual.volcengineapi.com',
            'config' => [
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'cn-north-1',
                    'service' => 'cv',
                ],
            ],
        ];
    }

    public function JPCartoon(array $query = [])
    {
        $response = $this->request('JPCartoon', $query);
        return $response->getBody();
    }

    public function FaceSwap(array $query = [])
    {
        $response = $this->request('FaceSwap', $query);
        return $response->getBody();
    }

    public function HumanSegment(array $query = [])
    {
        $response = $this->request('HumanSegment', $query);
        return $response->getBody();
    }

    public function GeneralSegment(array $query = [])
    {
        $response = $this->request('GeneralSegment', $query);
        return $response->getBody();
    }

    public function EnhancePhoto(array $query = [])
    {
        $response = $this->request('EnhancePhoto', $query);
        return $response->getBody();
    }

    public function ConvertPhoto(array $query = [])
    {
        $response = $this->request('ConvertPhoto', $query);
        return $response->getBody();
    }

    public function PotraitEffect(array $query = [])
    {
        $response = $this->request('PotraitEffect', $query);
        return $response->getBody();
    }

    public function ImageAnimation(array $query = [])
    {
        $response = $this->request('ImageAnimation', $query);
        return $response->getBody();
    }

    public function ImageStyleConversion(array $query = [])
    {
        $response = $this->request('ImageStyleConversion', $query);
        return $response->getBody();
    }

    public function GameCartoon(array $query = [])
    {
        $response = $this->request('3DGameCartoon', $query);
        return $response->getBody();
    }

    public function DollyZoom(array $query = [])
    {
        $response = $this->request('DollyZoom', $query);
        return $response->getBody();
    }

    public function HairStyle(array $query = [])
    {
        $response = $this->request('HairStyle', $query);
        return $response->getBody();
    }

    public function EyeClose2Open(array $query = [])
    {
        $response = $this->request('EyeClose2Open', $query);
        return $response->getBody();
    }

    public function EmoticonEdit(array $query = [])
    {
        $response = $this->request('EmoticonEdit', $query);
        return $response->getBody();
    }

    public function StretchRecovery(array $query = [])
    {
        $response = $this->request('StretchRecovery', $query);
        return $response->getBody();
    }

    public function DistortionFree(array $query = [])
    {
        $response = $this->request('DistortionFree', $query);
        return $response->getBody();
    }

    public function ImageFlow(array $query = [])
    {
        $response = $this->request('ImageFlow', $query);
        return $response->getBody();
    }

    public function OverResolution(array $query = [])
    {
        $response = $this->request('OverResolution', $query);
        return $response->getBody();
    }

    protected $apiList = [
        'JPCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'JPCartoon',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'FaceSwap' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FaceSwap',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'HumanSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HumanSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'GeneralSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'GeneralSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EnhancePhoto' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnhancePhoto',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ConvertPhoto' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ConvertPhoto',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'PotraitEffect' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'PotraitEffect',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageAnimation' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageAnimation',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageStyleConversion' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageStyleConversion',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        '3DGameCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => '3DGameCartoon',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'DollyZoom' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DollyZoom',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'HairStyle' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HairStyle',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EyeClose2Open' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EyeClose2Open',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EmoticonEdit' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EmoticonEdit',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'StretchRecovery' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'StretchRecovery',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'DistortionFree' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DistortionFree',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ImageFlow' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageFlow',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'OverResolution' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'OverResolution',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
    ];
}
