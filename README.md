## Installation

1. Clone this repository to your local machine using `git clone https://github.com/levend18/adapter-design-pattern-samples-in-php.git`.



2. Navigate to the project directory.

```bash
cd adapter-design-pattern-samples-in-php
```

3. You're ready to use the examples!

## Examples

### Message Adapter

In this example, we demonstrate how to use the Adapter design pattern to adapt an existing class that prints messages to work with a new class that expects messages in a different format. The classes `OldMessagePrinter` and `NewMessagePrinter` represent the incompatible interfaces, and the `MessageAdapter` class acts as the adapter to make them work together.

To run the example:

```bash
php message-adapter.php
```

### Car Adapter

In this example, we use the Adapter design pattern to adapt a gas-powered car to work with an electric car interface. The `GasCar` class represents the gas-powered car with an incompatible interface, while the `ElectricCar` class represents the electric car interface. The `ElectricCarAdapter` class adapts the `GasCar` to the `ElectricCar` interface.

To run the example:

```bash
php car-adapter.php
```

### Notification Adapter

In this example, we demonstrate the Adapter design pattern using a notification system. We have three classes: `Email`, `Sms`, and `PushNotificationAdapter`, each implementing the `Notification` interface. Additionally, we have a class called `Firebase`, which represents a Firebase-based push notification service with a different interface.

- `Email` and `Sms` classes represent the existing notification methods.
- `PushNotificationAdapter` is the adapter class that allows us to use the Firebase push notification service with the `Notification` interface.

To run the example:

```bash
php notification-adapter.php
```

This example demonstrates how you can adapt the Firebase push notification service to work with the `Notification` interface using the `PushNotificationAdapter` class.

## Contributing

If you'd like to contribute to this repository, please feel free to submit a pull request with your improvements, additional examples, or corrections.