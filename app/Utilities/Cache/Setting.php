<?php

namespace App\Utilities\Cache;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class Setting
{
    const PATH_SETTING = "config/setting.json";
    const CACHE_NAME = "cache-settings";
    const READ_AS_ARRAY = false;

    public static function get_default_setting(): array
    {
        return [
            "title" => "",
            "description" => "",
            "keywords" => "",
            "icon" => "",
            "author" => "",
            "graph_image" => "",
            "google_verification" => null,
            "bing_verification" => null,
            "yandex_verification" => null,
            "custom_meta_tag" => "<pre>&lt;meta name=\"\" value=\"\"&gt;<\/pre>",
            "custom_external_css" => null,
            "custom_external_js" => null
        ];
    }

    public static function reset(): array|object
    {
        Storage::delete(self::PATH_SETTING);
        Cache::forget(self::CACHE_NAME);

        return Setting::init();
    }

    public static function init(bool $toArray = false): array|object
    {
        if (!Storage::exists(self::PATH_SETTING) && !Cache::has(self::CACHE_NAME)) {
            $defaultCache = json_encode(self::get_default_setting(), JSON_PRETTY_PRINT);

            Storage::put(self::PATH_SETTING, $defaultCache);
        }

        try {
            $cache = json_decode(Storage::get(self::PATH_SETTING), self::READ_AS_ARRAY);

            Cache::put(self::CACHE_NAME, $cache);
            return $toArray ? collect($cache)->toArray() : (object) collect($cache)->toArray();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public static function update(array $items): array
    {
        $settings = json_decode(Storage::get(self::PATH_SETTING), true);

        foreach ($items as $key => $item) {
            if (isset($settings[$key]))
                $settings[$key] = $item;
        }

        return self::store($settings);
    }

    public static function store(array $items): array
    {
        $content = json_encode($items, JSON_PRETTY_PRINT);

        Storage::put(self::PATH_SETTING, $content);
        Cache::put(self::CACHE_NAME, $items);

        return $items;
    }
}
