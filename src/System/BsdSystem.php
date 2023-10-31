<?php


namespace Mobaichi\JupyterPHPInstaller\System;


final class BsdSystem extends UnixSystem
{
    public function getOperativeSystem(): int
    {
        return self::OS_BSD;
    }
}
