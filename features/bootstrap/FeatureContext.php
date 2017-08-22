<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{

    /**
     * @When I press more
     */
    public function iPressMore()
    {
        throw new PendingException();
    }
}
