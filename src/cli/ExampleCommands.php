<?php

namespace StarterTest60\Cli;

class ExampleCommands extends \Robo\Tasks
{
    /**
     * @command multiply
     */
    public function multiply($a, $b)
    {
        $model = new \StarterTest60\Example($a);
        $result = $model->multiply($b);

        $this->io()->text("$a times $b is $result");
    }
}
