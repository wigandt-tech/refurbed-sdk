<?php
/**
 * OrderLabelTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merchant API
 *
 * The refurbed merchant API allows to access and manage markets, currencies, instances, shipping profiles, offers, market offers, orders and order items.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: integrations@refurbed.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace WigandtTech\Refurbed\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * OrderLabelTest Class Doc Comment
 *
 * @category    Class
 * @description Labels are additional indicators set next to the order state. They can be filtered by.   - PROCESSING: Set if the items&#39; states of an order are neither all state NEW, nor all a final state.  - PARTIALLY_REJECTED: Set if at least one order item (but not all) has state REJECTED.  - PARTIALLY_CANCELLED: Set if at least one order item (but not all) has state CANCELLED.  - PARTIALLY_SHIPPED: Set if at least one order item (but not all) has state SHIPPED.  - PARTIALLY_RETURNED: Set if at least one order item (but not all) has state RETURNED.  - MISSING_PARCEL_TRACKING_URLS: Set if at least one order item does not have parcel tracking url set.  - MISSING_ITEM_IDENTIFIERS: Set if at least one order item does not have item identifier set.
 * @package     WigandtTech\Refurbed
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OrderLabelTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "OrderLabel"
     */
    public function testOrderLabel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
