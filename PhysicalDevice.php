<?php

namespace Waveforms\PhysicalDevices;

use Waveforms\Contracts\PhysicalDevices\PhysicalDevice as DeviceContract;

abstract class PhysicalDevice implements DeviceContract
{
    abstract public static function circuit(string $driver): static;
}
