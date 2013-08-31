<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * AbstractPlugin class
 *
 * @author Raúl Fraile Beneyto <raulfraile@gmail.com> || @raulfraile
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Plugin\Symfony2;

use Ladybug\Plugin\PluginInterface;

class SymfonyPlugin implements PluginInterface
{
    public static function getConfigFile()
    {
        return __DIR__ . '/Config/services.xml';
    }

}
