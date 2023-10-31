<?php


namespace Mobaichi\JupyterPHPInstaller\Command;


use Mobaichi\JupyterPHPInstaller\Console\Application;
use Mobaichi\JupyterPHPInstaller\IO\IOInterface;

use Mobaichi\JupyterPHPInstaller\IO\NullIO;
use Symfony\Component\Console\Command\Command as BaseCommand;


abstract class Command extends BaseCommand
{
    /** @var  IOInterface */
    private $io;

    public function getIO()
    {
        if (null === $this->io) {
            $application = $this->getApplication();

            if ($application instanceof Application) {
                $this->io = $application->getIO();
            } else {
                $this->io = new NullIO();
            }
        }

        return $this->io;
    }
}
