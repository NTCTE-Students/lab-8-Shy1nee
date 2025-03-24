<?php

class Thermostat {
    private $temperature;

    public function setTemperature($temperature) {
        if ($temperature >= 0 && $temperature <= 30) {
            $this->temperature = $temperature;
        }
    }

    public function getTemperature() {
        return $this->temperature;
    }
}

// Пример использования
$thermostat = new Thermostat();
$thermostat->setTemperature(22);
echo "Current temperature: " . $thermostat->getTemperature();
