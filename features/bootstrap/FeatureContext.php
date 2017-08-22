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
        $this->getSession()
            // the browser
            ->getPage()
            // the DocumentElement
            ->findButton("more")
            // the NodeElement
            ->press();
    }
}
