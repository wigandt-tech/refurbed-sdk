<?php
/**
 * OrderItemStateTest
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace WigandtTech\Refurbed\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * OrderItemStateTest Class Doc Comment
 *
 * @category    Class
 * @description - NEW: Order item was not handled yet. Next states: REJECTED, CANCELLED or ACCEPTED.  - REJECTED: Order item cannot be fulfilled. Final state.  - CANCELLED: Order item was cancelled by the customer. Is like REJECTED but was requested by the customer. Final state.  - ACCEPTED: Order item was accepted for fulfillment. Next states: CANCELLED or SHIPPED.  - SHIPPED: Order item was shipped. The parcel tracking link needs to be set for this state to be set. The item identifier should be set, if possible. Possible final state. Next possible state, if necessary: RETURNED.  - RETURNED: Order item was returned by the customer. Final state.
 * @package     WigandtTech\Refurbed
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OrderItemStateTest extends TestCase
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
     * Test "OrderItemState"
     */
    public function testOrderItemState()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
