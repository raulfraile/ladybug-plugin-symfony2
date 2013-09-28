<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Object/DomDocument dumper
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Plugin\Symfony2\Inspector\Object\Symfony\Component\HttpFoundation;

use Ladybug\Inspector\AbstractInspector;
use Ladybug\Inspector\InspectorInterface;
use Ladybug\Inspector\InspectorDataWrapper;
use Ladybug\Type;

class Response extends AbstractInspector
{
    public function accept(InspectorDataWrapper $data)
    {
        return InspectorInterface::TYPE_CLASS == $data->getType() && 'Symfony\Component\HttpFoundation\Response' === $data->getId();
    }

    public function getData(InspectorDataWrapper $data)
    {
        /** @var $var Symfony\Component\HttpFoundation\Response */
        $var = $data->getData();

        /** @var $code Type\Extended\CodeType */
        $code = $this->extendedTypeFactory->factory('code', $this->level);

        $code->setLanguage('http');
        $code->setContent($var->__toString());
        $code->setTitle('HTTP Response');

        return $code;
    }

}
