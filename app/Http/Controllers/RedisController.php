<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function setExample(Request $request)
    {
        $key = $request->key;
        $value = $request->value;
        $life = $request->life;
        return $this->setCache($key, $value, $life);
    }

    public function setCache($keyName, $value, $lifetime)
    {
        $cached = Redis::set($keyName, $value);
        $cached = Redis::expire($keyName, $lifetime);
        return $cached;
    }

    public function getCache($keyName)
    {
        try {
            $cached = Redis::get($keyName);
            if (!$cached) {
                return $this->setCache($keyName, 'new cache', 60);
            }
            return 'cache value is : '.$cached;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
