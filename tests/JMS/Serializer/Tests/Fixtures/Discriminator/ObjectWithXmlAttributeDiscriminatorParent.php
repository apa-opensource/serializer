<?php
/*
 * This file is part of the TWT eCommerce platform package.
 *
 * (c) TWT Interactive GmbH <info@twt.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JMS\Serializer\Tests\Fixtures\Discriminator;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\Discriminator(field = "type", map = {
 *    "child": "JMS\Serializer\Tests\Fixtures\Discriminator\ObjectWithXmlAttributeDiscriminatorChild"
 * },
 *     xmlAttribute=true)
 */
class ObjectWithXmlAttributeDiscriminatorParent
{

}