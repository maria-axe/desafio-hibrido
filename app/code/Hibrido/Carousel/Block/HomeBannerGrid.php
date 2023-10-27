<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 *
 * @author    Hibrido - 2023  
 */

namespace Hibrido\Carousel\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;

class HomeBannerGrid extends Template
{
    protected $_storeManager;

    public function __construct(
        StoreManagerInterface $storeManager,
        Template\Context $context,
        array $data = []
    ) {
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    public function getBannerImages()
    {
        $mediaUrl = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return [
            [
                'image' => $mediaUrl . 'banners-grid/image-grid1.webp',
                'url' => '/women.html',
                'alt' => 'Image 1',
                'title' => __('Mega elastic'),
                'description' => __('Draw the curves of the body.'),
            ],
            [
                'image' => $mediaUrl . 'banners-grid/image-grid5.webp',
                'url' => '/women.html',
                'alt' => 'Image 2',
                'title' => __('Thermal'),
                'description' => __('Do not impose the climate, you are impeccable.'),
            ],
            [
                'image' => $mediaUrl . 'banners-grid/image-grid3.webp',
                'url' => '/women.html',
                'alt' => 'Image 3',
                'title' => __('Lengths'),
                'description' => __('The perfect no-adjustment jeans.'),
            ],
            [
                'image' => $mediaUrl . 'banners-grid/image-grid6.webp',
                'url' => '/women.html',
                'alt' => 'Image 4',
                'title' => __('Does not mark'),
                'description' => __('skin imperfections.'),
            ],
            [
                'image' => $mediaUrl . 'banners-grid/image-grid5.webp',
                'url' => '/women.html',
                'alt' => 'Image 5',
                'title' => __('Intense black'),
                'description' => __('The best bet for your closet.'),
            ],
            [
                'image' => $mediaUrl . 'banners-grid/image-grid6.webp',
                'url' => '/women.html',
                'alt' => 'Image 6',
                'title' => __('Intense black'),
                'description' => __('The best bet for your closet.'),
            ],
        ];
    }
}
