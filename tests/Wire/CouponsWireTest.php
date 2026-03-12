<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Coupons\Requests\GetCouponCollectionsRequest;
use Brevo\Coupons\Requests\CreateCouponCollectionRequest;
use Brevo\Coupons\Requests\UpdateCouponCollectionRequest;
use Brevo\Coupons\Requests\CreateCouponsRequest;

class CouponsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetCouponCollections(): void {
        $testId = 'coupons.get_coupon_collections.0';
        $this->client->coupons->getCouponCollections(
            new GetCouponCollectionsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'coupons.get_coupon_collections.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/couponCollections",
            null,
            1
        );
    }

    /**
     */
    public function testCreateCouponCollection(): void {
        $testId = 'coupons.create_coupon_collection.0';
        $this->client->coupons->createCouponCollection(
            new CreateCouponCollectionRequest([
                'defaultCoupon' => 'Winter',
                'name' => '10%OFF',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'coupons.create_coupon_collection.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/couponCollections",
            null,
            1
        );
    }

    /**
     */
    public function testGetCouponCollection(): void {
        $testId = 'coupons.get_coupon_collection.0';
        $this->client->coupons->getCouponCollection(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'coupons.get_coupon_collection.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/couponCollections/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateCouponCollection(): void {
        $testId = 'coupons.update_coupon_collection.0';
        $this->client->coupons->updateCouponCollection(
            'id',
            new UpdateCouponCollectionRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'coupons.update_coupon_collection.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/couponCollections/id",
            null,
            1
        );
    }

    /**
     */
    public function testCreateCoupons(): void {
        $testId = 'coupons.create_coupons.0';
        $this->client->coupons->createCoupons(
            new CreateCouponsRequest([
                'collectionId' => '23befbae-1505-47a8-bd27-e30ef739f32c',
                'coupons' => [
                    'Uf12AF',
                ],
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'coupons.create_coupons.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/coupons",
            null,
            1
        );
    }

    /**
     */
    protected function setUp(): void {
        parent::setUp();
        $this->client = new Brevo(
            apiKey: 'test-apiKey',
        options: [
            'baseUrl' => 'http://localhost:8080',
        ],
        );
    }
}
