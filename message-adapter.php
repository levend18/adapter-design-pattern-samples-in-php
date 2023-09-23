<?php
// Existing class with incompatible interface
class OldMessagePrinter {
    public function printMessage($message) {
        echo "Old Message: $message\n";
    }
}

// New class with a different interface
class NewMessagePrinter {
    public function display($formattedMessage) {
        echo "New Message: $formattedMessage\n";
    }
}

// Adapter class to make the old class compatible with the new one
class MessageAdapter {
    private $oldPrinter;

    public function __construct(OldMessagePrinter $oldPrinter) {
        $this->oldPrinter = $oldPrinter;
    }

    public function display($formattedMessage) {
        $message = $this->formatMessage($formattedMessage);
        $this->oldPrinter->printMessage($message);
    }

    private function formatMessage($formattedMessage) {
        // Add your logic here to format the message as needed
        return strtoupper($formattedMessage);
    }
}

// Client code
$oldPrinter = new OldMessagePrinter();
$newPrinter = new NewMessagePrinter();

// Adapter to make the old printer compatible with the new one
$adapter = new MessageAdapter($oldPrinter);

// Now, use the adapted old printer with the new printer
$newPrinter->display("Hello, Adapter Pattern!");
$adapter->display("Hello, Adapter Pattern!");
