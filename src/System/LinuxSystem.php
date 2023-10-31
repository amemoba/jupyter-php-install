<?php


namespace Mobaichi\JupyterPHPInstaller\System;


final class LinuxSystem extends UnixSystem
{
    public function getOperativeSystem(): int
    {
        return self::OS_LINUX;
    }
}
