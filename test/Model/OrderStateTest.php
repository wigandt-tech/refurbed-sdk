<?php
/**
 * OrderStateTest
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
 * OrderStateTest Class Doc Comment
 *
 * @category    Class
 * @description Order states are calculated based on the individual order item states.   - NEW: Order was not handled yet. At least one order item has state NEW.  - REJECTED: Order was rejected (cannot be fulfilled). All order items have state REJECTED.  - CANCELLED: Order was cancelled. All order items have state CANCELLED.  - ACCEPTED: Order was accepted. At least one order item has state ACCEPTED, and none of the other items still have state NEW.  - SHIPPED: Order was fully shipped. All order items have state SHIPPED.  - RETURNED: Order was fully returned. All order items have state RETURNED.
 * @package     WigandtTech\Refurbed
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OrderStateTest extends TestCase
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
     * Test "OrderState"
     */
    public function testOrderState()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
