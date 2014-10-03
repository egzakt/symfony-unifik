<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\HttpKernel\Kernel;
use Unifik\DatabaseConfigBundle\DependencyInjection\Compiler\ContainerBuilder;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(

            // Standard distribution bundles
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            // Unifik bundles dependencies
            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Trsteel\CkeditorBundle\TrsteelCkeditorBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\AopBundle\JMSAopBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),

            // Unifik main bundles
            new Unifik\SystemBundle\UnifikSystemBundle(),
            new Unifik\DoctrineBehaviorsBundle\UnifikDoctrineBehaviorsBundle(),
            new Unifik\DatabaseConfigBundle\UnifikDatabaseConfigBundle(),
            new Unifik\MediaBundle\UnifikMediaBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Amp\SubrequestExtraBundle\AmpSubrequestExtraBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }

    /**
     * Custom container builder that is used to enable configuration of the container from the database
     *
     * @link https://github.com/egzakt/UnifikDatabaseConfigBundle
     * @return ContainerBuilder
     */
    protected function getContainerBuilder()
    {
        return new ContainerBuilder(new ParameterBag($this->getKernelParameters()));
    }
}
