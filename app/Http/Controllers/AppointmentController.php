<?php

// app/Http/Controllers/AppointmentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
{
    // Récupérer la date depuis la requête
    $selectedDate = $request->input('date');

    // Enregistrer la date dans la base de données (utilisez votre modèle et votre logique d'enregistrement)
    // Exemple imaginaire :
    $appointment = new Appointment();
    $appointment->date = $selectedDate;
    $appointment->save();

    // Répondre avec une confirmation ou autre réponse si nécessaire
    return response()->json(['message' => 'Date enregistrée avec succès'], 200);
}
}
