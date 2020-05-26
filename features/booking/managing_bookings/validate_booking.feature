@managing_bookings
Feature: Validate booking
    In order to validate a booking
    As an Administrator
    I want to validate a booking

    Background:
        Given animals are classified under "Cats" and "Dogs" categories
        And there is an animal with name "Kitty"
        And this animal belongs to "Cats"
        And this animal has been booked by customer "cruella@101dalamatiens.com"
        And I am logged in as an administrator

    @ui
    Scenario: Validate booking
        Given I want to validate this booking
        When I validate it
        Then I should see this booking has been validated in the list