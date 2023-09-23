<?php

// Existing class representing a gas-powered car with an incompatible interface
class GasCar {
    public function startEngine() {
        echo "Starting the gas engine...\n";
    }

    public function accelerate() {
        echo "Pressing the gas pedal to accelerate...\n";
    }
}

// New class representing an electric car with a different interface
class ElectricCar {
    public function startMotor() {
        echo "Starting the electric motor...\n";
    }

    public function accelerate() {
        echo "Pressing the accelerator pedal to accelerate...\n";
    }
}

// Adapter class to make the gas-powered car compatible with the electric car
class ElectricCarAdapter {
    private $gasCar;

    public function __construct(GasCar $gasCar) {
        $this->gasCar = $gasCar;
    }

    public function startMotor() {
        $this->gasCar->startEngine();
    }

    public function accelerate() {
        $this->gasCar->accelerate();
    }
}

// Client code
$gasCar = new GasCar();
$electricCar = new ElectricCar();

// Adapter to make the gas-powered car compatible with the electric car
$adapter = new ElectricCarAdapter($gasCar);

// Now, use the adapted gas-powered car as if it were an electric car
$electricCar->startMotor();
$electricCar->accelerate();

// Use the adapted gas-powered car with the electric car interface
$adapter->startMotor();
$adapter->accelerate();

