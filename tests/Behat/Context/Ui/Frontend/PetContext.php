<?php

/*
 * This file is part of the Monofony demo.
 *
 * (c) Monofony
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui\Frontend;

use App\Entity\Animal\Pet;
use App\Tests\Behat\Page\Frontend\Pet\IndexPage;
use App\Tests\Behat\Page\Frontend\Pet\ShowPage;
use Behat\Behat\Context\Context;
use Sylius\Component\Taxonomy\Model\TaxonInterface;
use Webmozart\Assert\Assert;

final class PetContext implements Context
{
    /** @var IndexPage */
    private $indexPage;

    /** @var ShowPage */
    private $showPage;

    public function __construct(IndexPage $indexPage, ShowPage $showPage)
    {
        $this->indexPage = $indexPage;
        $this->showPage = $showPage;
    }

    /**
     * @Given I want to browse pets
     */
    public function iWantToBrowsePets()
    {
        $this->indexPage->open();
    }

    /**
     * @Then I should see the pet :petName
     */
    public function iShouldSeeThePet(string $petName)
    {
        Assert::true($this->indexPage->isPetOnList($petName));
    }

    /**
     * @Then /^I check (this pet)'s details$/
     */
    public function iCheckThisAnimalsDetails(Pet $animal)
    {
        $this->showPage->open(['slug' => $animal->getSlug()]);
    }

    /**
     * @Then I should see the pet name :petName
     */
    public function iShouldSeeTheAnimalName(string $petName)
    {
        Assert::same($this->showPage->getName(), $petName);
    }

    /**
     * @When /^I browse pets from (taxon "([^"]+)")$/
     */
    public function iBrowsePetsFromTaxon(TaxonInterface $taxon)
    {
        $this->indexPage->open(['code' => $taxon->getCode()]);
    }

    /**
     * @Then I should not see the pet :petName
     */
    public function iShouldNotSeeThePet(string $petName)
    {
        Assert::false($this->indexPage->isPetOnList($petName));
    }
}
