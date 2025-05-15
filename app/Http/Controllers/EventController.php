<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Category;
use App\Models\Event;
use App\Models\PointMap;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\Request;




class EventController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('events.create', compact('categories'));
    }

    public function store(StoreEventRequest $request)
    {
        Event::create($request->validated());

        return redirect()->back()->with('success', 'L\'événement a été ajouté avec succès.');
    }

    public function index()
{
   
    $categories = Category::with('events')->get();

    return view('events.index', compact('categories'));
}

/////://///////////////////////////

public function delete($id)
{
    $event = Event::findOrFail($id);
    return view('events.delete', compact('event'));
}

// Supprime l'événement
public function destroy($id)
{
    $event = Event::findOrFail($id);
    $event->delete();

    return redirect()->route('events.index')->with('success', 'Événement supprimé avec succès.');
}


///
///
///
// Affiche le formulaire d'édition
public function edit($id)
{
    $event = Event::findOrFail($id);
    $categories = Category::all(); // pour le select
    return view('events.edit', compact('event', 'categories'));
}

// Met à jour les données de l'événement
public function update(Request $request, $id)
{
    $request->validate([
        'artiste_name' => 'required|string|max:255',
        'date' => 'required|date',
        'scene' => 'required|string|max:255',
        'description' => 'nullable|string',
        'horaire' => 'required|string',
        'category_id' => 'required|exists:category,id',
    ]);

    $event = Event::findOrFail($id);
    $event->update($request->all());

    return redirect()->route('events.index')->with('success', 'Événement mis à jour avec succès.');
}





//regarde les notifications 
public function getNotifications()
{
    $important = Notification::where('type', 'important')->get();
    $general = Notification::whereIn('type', ['general', 'normal'])->get();

    return compact('important', 'general');
}

// Notification create, delete, update

public function createNotification()
{
    return view('notifications.create_notification');
}

public function storeNotification(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'message' => 'required|string',
        'type' => 'required|in:important,general,normal',
    ]);

    Notification::create([
        'title' => $request->title,
        'message' => $request->message,
        'type' => $request->type,
        'date' => now(), 
    ]);
    

    return redirect()->route('notifications.create')->with('success', 'Notification ajoutée avec succès.');
}


/// Regarde que la partie concerts
public function showConcerts()
{
    $concertCategory = Category::where('category_name', 'Concerts')->with('events')->first();
    $notifications = $this->getNotifications();
    $points = PointMap::all();

    return view('events.concerts', [
        'category' => $concertCategory,
        'importantNotifs' => $notifications['important'],
        'generalNotifs' => $notifications['general'],
        'points' => $points,
    ]);
}


// Créer que concerts

public function createConcerts()
{
    // Récupérer la première catégorie ayant le nom 'Concerts'
    $concertCategory = Category::where('category_name', 'Concerts')->first();

    // Vérifier si une catégorie a été trouvée
    if (!$concertCategory) {
        // Si aucune catégorie n'est trouvée, rediriger avec un message d'erreur
        return redirect()->back()->with('error', 'Catégorie de concert introuvable.');
    }

    // Passer la catégorie au template
    return view('events.create-concerts', compact('concertCategory'));
}



}
