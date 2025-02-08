<?php

namespace App\Filter;

use App\Dto\PromotionEnquiryInterface;

interface PromotionsFilterInterface
{
    public function apply(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface;
}