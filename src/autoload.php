<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'wikimedia\\workshop\\candidate' => '/Candidate.php',
                'wikimedia\\workshop\\chancellor' => '/Chancellor.php',
                'wikimedia\\workshop\\chancellorelectedevent' => '/ChancellorElectedEvent.php',
                'wikimedia\\workshop\\chancellorelectedeventhandler' => '/ChancellorElectedEventHandler.php',
                'wikimedia\\workshop\\chancellorprojector' => '/ChancellorProjector.php',
                'wikimedia\\workshop\\command' => '/Command.php',
                'wikimedia\\workshop\\commandhandler' => '/CommandHandler.php',
                'wikimedia\\workshop\\electachancellorcommand' => '/ElectAChancellorCommand.php',
                'wikimedia\\workshop\\electachancellorcommandhandler' => '/ElectAChanncellorCommandHandler.php',
                'wikimedia\\workshop\\event' => '/Event.php',
                'wikimedia\\workshop\\eventemitter' => '/EventEmitter.php',
                'wikimedia\\workshop\\eventhandler' => '/EventHandler.php',
                'wikimedia\\workshop\\government' => '/Government.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
