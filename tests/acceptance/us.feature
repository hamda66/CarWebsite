Feature: commentPage
    As a user
    In order to to test the comment form
    I need to fill in the form
    Scenario: 
        Given I input in a name "name"
        And I input in a message "message"
        And I input in a country "country"
Feature: registration
    As a user
    In order to to test the registration form
    I need to fill in the form
    Scenario: 
        Given I input in a email "email"
        And I input in a password "password" 
Feature: Store
    As user
    I want to be able to press the store
    So that that I can go to the store
    Scenario: 
      Given i'm on the main page
      When I press store
      Then I should be redirected to store page