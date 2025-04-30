<?php
declare(strict_types=1);

/**
* This source file is available under the terms of the
* Pimcore Open Core License (POCL)
* Full copyright and license information is available in
* LICENSE.md which is distributed with this source code.
*
*  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.com)
*  @license    Pimcore Open Core License (POCL)
*/

/**
 * TODO: BC layer, remove with Pimcore 13
 */
$classAliases = [
    '\Pimcore\Bundle\ApplicationLoggerBundle\ApplicationLogger' => '\Pimcore\Log\ApplicationLogger',
    '\Pimcore\Bundle\ApplicationLoggerBundle\Controller\LogController' => '\Pimcore\Bundle\AdminBundle\Controller\Admin\ApplicationLoggerDb',
    '\Pimcore\Bundle\ApplicationLoggerBundle\FileObject' => '\Pimcore\Log\FileObject',
    '\Pimcore\Bundle\ApplicationLoggerBundle\Handler\ApplicationLoggerDb' => '\Pimcore\Log\Handler\ApplicationLoggerDb',
    '\Pimcore\Bundle\ApplicationLoggerBundle\Maintenance\LogArchiveTask' => '\Pimcore\Maintenance\Tasks\LogArchiveTask',
    '\Pimcore\Bundle\ApplicationLoggerBundle\Maintenance\LogMailMaintenanceTask' => '\Pimcore\Maintenance\Tasks\LogMailMaintenanceTask',
    '\Pimcore\Bundle\ApplicationLoggerBundle\Processor\ApplicationLoggerProcessor' => '\Pimcore\Log\Processor\ApplicationLoggerProcessor',
    '\Pimcore\Bundle\PersonalizationBundle\Model\Tool\Targeting\TargetGroup' => '\Pimcore\Model\Tool\Targeting\TargetGroup',
    '\Pimcore\Model\DataObject\Data\GeoCoordinates' => '\Pimcore\Model\DataObject\Data\Geopoint',
    '\Pimcore\Bundle\AdminBundle\DataObject\GridColumnConfig\ConfigElementInterface' => '\Pimcore\DataObject\GridColumnConfig\ConfigElementInterface',
    '\Pimcore\Bundle\AdminBundle\Perspective\Config' => '\Pimcore\Perspective\Config',
    '\Pimcore\Bundle\AdminBundle\CustomView\Config' => '\Pimcore\CustomView\Config',
    '\Pimcore\Bundle\AdminBundle\Service\Workflow\ActionsButtonService' => '\Pimcore\Workflow\ActionsButtonService',
    '\Pimcore\Bundle\NewsletterBundle\Model\DataObject\ClassDefinition\Data\NewsletterConfirmed' => '\Pimcore\Model\DataObject\ClassDefinition\Data\NewsletterConfirmed',
    '\Pimcore\Bundle\NewsletterBundle\Model\DataObject\ClassDefinition\Data\NewsletterActive' => '\Pimcore\Model\DataObject\ClassDefinition\Data\NewsletterActive',
];

foreach ($classAliases as $class => $alias) {
    if (!class_exists($alias, false)) {
        @class_alias($class, $alias);
    }
}
