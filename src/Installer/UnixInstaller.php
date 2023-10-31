<?php


namespace Mobaichi\JupyterPHPInstaller\Installer;


abstract class UnixInstaller extends Installer
{
    protected function getJupyterKernelsMetadataAdminPath(): string
    {
        return '/usr/local/share/jupyter/kernels/jupyter-php';
    }

    protected function getKernelEntryPointPath(): string
    {
        return $this->getInstallPath() . '/pkgs/vendor/mobaichi/jupyter-php/src/kernel.php';
    }
}
