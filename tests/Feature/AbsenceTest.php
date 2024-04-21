<?php

namespace Tests\Feature;

use Tests\TestCase;

class AbsenceTest extends TestCase
{
    public function test_user_can_submit_an_absence()
    {
        $response = $this->postJson('/absence', [
            'absenceType' => 1,
            'dateFrom' => '2024-01-01',
            'timeFrom' => '08:00',
            'estimatedReturnDate' => '2024-01-02',
            'phoneNumber' => '+46 123 456 789',
            'priority' => true,
            'comments' => 'Feeling unwell',
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Absence data received and validated successfully.',
                     'data' => [
                         'absenceType' => 1,
                         'dateFrom' => '2024-01-01',
                         'timeFrom' => '08:00',
                         'estimatedReturnDate' => '2024-01-02',
                         'phoneNumber' => '+46 123 456 789',
                         'priority' => true,
                         'comments' => 'Feeling unwell',
                     ]
                 ]);
    }

    public function test_validation_fails_if_required_fields_are_missing()
    {
        $response = $this->postJson('/absence', [
            'absenceType' => 1
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['dateFrom', 'estimatedReturnDate', 'phoneNumber', 'priority']);
    }

    public function test_from_date_must_be_before_estimated_return_date()
    {
        $response = $this->postJson('/absence', [
            'absenceType' => 1,
            'dateFrom' => '2024-01-02',
            'timeFrom' => '08:00',
            'estimatedReturnDate' => '2024-01-01',
            'comments' => 'Feeling unwell',
            'phoneNumber' => '+46 123 456 789',
            'priority' => true
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['estimatedReturnDate']);
    }

    public function test_sick_leave_requires_a_reason()
    {
        $response = $this->postJson('/absence', [
            'absenceType' => 1,
            'dateFrom' => '2024-01-01',
            'timeFrom' => '08:00',
            'estimatedReturnDate' => '2024-01-02',
            'phoneNumber' => '+46 123 456 789',
            'priority' => true,
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['comments']);
    }

    public function test_vab_does_not_require_a_reason()
    {
        $response = $this->postJson('/absence', [
            'absenceType' => 2,
            'dateFrom' => '2024-01-01',
            'timeFrom' => '08:00',
            'estimatedReturnDate' => '2024-01-02',
            'phoneNumber' => '+46 123 456 789',
            'priority' => true
        ]);

        $response->assertStatus(201);
    }
}