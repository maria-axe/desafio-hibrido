<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 *
 * @author    Hibrido - 2023  
 */

namespace Hibrido\Carousel\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;

class HomeBlockHowItWorks extends Template
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
                'image' => $mediaUrl . 'block-howitworks/image-navegue.png',
                'url' => '/women.html',
                'alt' => 'Image 1',
                'title' => __('Browse the menu'),
                'description' => __('Healthy and delicious dishes that make your day easier and fit into your routine.'),
            ],
            [
                'image' => $mediaUrl . 'block-howitworks/image-combo.png',
                'url' => '/women.html',
                'alt' => 'Image 2',
                'title' => __('Build your combo'),
                'description' => __('Choose your favorite dishes. The more you buy, the less you pay.'),
            ],
            [
                'image' => $mediaUrl . 'block-howitworks/image-entrega.png',
                'url' => '/women.html',
                'alt' => 'Image 3',
                'title' => __('Schedule delivery'),
                'description' => __('Deliveries within 24 hours. You choose the day and time to receive it at your door.'),
            ],
            [
                'image' => $mediaUrl . 'block-howitworks/image-facil.png',
                'url' => '/women.html',
                'alt' => 'Image 4',
                'title' => __('Easy, zero effort!'),
                'description' => __('You just heat up. From the freezer to the oven or microwave. Ready in a few minutes.'),
            ],
        ];
    }
}
