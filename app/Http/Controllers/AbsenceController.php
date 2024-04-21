<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{

    /**
     * @OA\Post(
     *     path="/absence",
     *     tags={"Absence"},
     *     summary="Submit an absence notification",
     *     description="Posts absence details to register an absence event. Ensure all required fields are included.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Necessary details of the absence",
     *         @OA\JsonContent(
     *             type="object",
     *             required={"absenceType", "dateFrom", "estimatedReturnDate", "phoneNumber", "priority"},
     *             @OA\Property(property="absenceType", type="integer", example=1, description="Type of absence, e.g., 1 for sick leave."),
     *             @OA\Property(property="absenceID", type="integer", example=101, description="Optional identifier for the absence."),
     *             @OA\Property(property="dateFrom", type="string", format="date", example="2024-01-01", description="Start date of the absence."),
     *             @OA\Property(property="timeFrom", type="string", format="time", example="08:00", description="Start time of the absence on the start date."),
     *             @OA\Property(property="estimatedReturnDate", type="string", format="date", example="2024-01-02", description="Expected return date."),
     *             @OA\Property(property="comments", type="string", example="Feeling unwell", description="Additional comments about the absence."),
     *             @OA\Property(property="phoneNumber", type="string", example="+46 123 456 789", description="Contact phone number during the absence."),
     *             @OA\Property(property="priority", type="boolean", example=true, description="Whether the absence should be treated as a priority.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Absence notification successfully created",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Absence notification created successfully"),
     *             @OA\Property(property="data", type="object", description="Echoes the posted absence details.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request due to invalid inputs"
     *     )
     * )
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'absenceType' => 'required|integer',
            'absenceID' => 'nullable|integer',
            'dateFrom' => 'required|date',
            'timeFrom' => 'nullable|date_format:H:i',
            'estimatedReturnDate' => 'required|date|after_or_equal:dateFrom',
            'comments' => 'nullable|string|max:255',
            'phoneNumber' => 'required|string',
            'priority' => 'required|boolean'
        ]);

        if ($request->input('absenceType') == 1) {
            $request->validate([
                'comments' => 'required|string|max:255'
            ]);
        } else {
            $validated['comments'] = $request->input('comments', '');
        }

        return response()->json([
            'message' => 'Absence data received and validated successfully.',
            'data' => $validated
        ], 201);
    }

}
