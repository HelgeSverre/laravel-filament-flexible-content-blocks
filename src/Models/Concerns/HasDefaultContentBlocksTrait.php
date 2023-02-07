<?php

namespace Statikbe\FilamentFlexibleContentBlocks\Models\Concerns;

use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\HtmlBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\TextBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\TextImageBlock;
use Statikbe\FilamentFlexibleContentBlocks\ContentBlocks\VideoBlock;
use Statikbe\FilamentFlexibleContentBlocks\Models\Contracts\HasContentBlocks;

/**
 * @mixin HasContentBlocks
 */
trait HasDefaultContentBlocksTrait
{
    use HasContentBlocksTrait;

    /**
     * {@inheritDoc}
     */
    public static function registerContentBlocks(): array
    {
        return [
            TextBlock::class,
            VideoBlock::class,
            HtmlBlock::class,
            TextImageBlock::class,
        ];
    }
}