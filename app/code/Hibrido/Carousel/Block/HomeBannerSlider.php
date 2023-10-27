<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 *
 * @author    Hibrido - 2023  
 */

namespace Hibrido\Carousel\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;

class HomeBannerSlider extends Template
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
                'image' => $mediaUrl . 'banners/banner-principal1.webp',
                'url' => '/women.html',
                'alt' => 'Banner 1',
                'title' => __('Shop the New. Outerwear Collection'),
            ],
            [
                'image' => $mediaUrl . 'banners/banner-principal2.webp',
                'url' => '/women.html',
                'alt' => 'Banner 2',
                'title' => __('Accessories to Keep Your Style Game Strong'),
            ],
        ];
    }
}
