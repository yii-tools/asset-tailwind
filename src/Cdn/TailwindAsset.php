<?php

declare(strict_types=1);

namespace Yii\Tailwind\Asset\Cdn;

use Yiisoft\Assets\AssetBundle;

final class TailwindAsset extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css'];
}