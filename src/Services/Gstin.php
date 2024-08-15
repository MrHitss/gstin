<?php

namespace Mrhitss\Gstin\Services;
use Mrhitss\Gstin\Concerns\GstinApi\GstinPublic;
use Mrhitss\Gstin\Concerns\GstinHttpClient;

class Gstin 
{
    use GstinHttpClient;
    use GstinPublic;
}