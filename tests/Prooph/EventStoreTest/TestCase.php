<?php
/*
 * This file is part of the prooph/event-store package.
 * (c) Alexander Miertsch <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Prooph\EventStoreTest;

use Prooph\EventSourcing\EventStoreFeature\ProophEventSourcingFeature;
use Prooph\EventStore\Adapter\AdapterInterface;
use Prooph\EventStore\Adapter\Zf2\Zf2EventStoreAdapter;
use Prooph\EventStore\Configuration\Configuration;
use Prooph\EventStore\EventStore;

/**
 * TestCase for Prooph EventStore tests
 *
 * @author Alexander Miertsch <contact@prooph.de>
 * @package Prooph\EventStoreTest
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{

}
