<?php


namespace Mobaichi\JupyterPHPInstaller\System;


final class MacSystem extends UnixSystem
{
    public function getOperativeSystem(): int
    {
        return self::OS_OSX;
    }
}
