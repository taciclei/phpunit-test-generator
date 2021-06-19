<?php
/**
 * Created by PhpStorm.
 * User: rchoquet
 * Date: 18/02/19
 * Time: 15:26.
 */

namespace Api\Bundle\CoreBundle;

use Api\Bundle\CoreBundle\Mail\Compiler\MailSenderPass;
use Api\Bundle\CoreBundle\Process\Compiler\ProcessPass;
use Api\Bundle\CoreBundle\Rule\Compiler\RuleServicePass;
use Api\Bundle\CoreBundle\Sms\Compiler\SmsSenderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApiCoreBundle.
 */
class ApiCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ProcessPass());
        $container->addCompilerPass(new MailSenderPass());
        $container->addCompilerPass(new SmsSenderPass());
        $container->addCompilerPass(new RuleServicePass());
    }
}
