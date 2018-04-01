<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class Tasks extends \Robo\Tasks
{
    /**
     * @param $world
     */
    public function hello($world)
    {
        $this->say("Hello, $world");
    }
}