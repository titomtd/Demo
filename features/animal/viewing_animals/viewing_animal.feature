@viewing_animals
Feature: Viewing an animal details
    In order to see animals detailed information
    As a Visitor
    I want to be able to view a single animal

    Background:
        Given animals are classified under "Cats" and "Dogs" categories
        And there is also a pet with name "Gizmo"
        And this pet belongs to "Dogs"

    @ui
    Scenario: Viewing a detailed page with animal's name
        Given I check this pet's details
        And I should see the animal name "Gizmo"
