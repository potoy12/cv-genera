<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo; // Asegúrate de tener este modelo si decides usarlo

class PersonalInfoController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'ciudad' => 'required|max:255'
        ]);

        PersonalInfo::create($validatedData);

        return redirect()->back()->with('success', 'Información guardada exitosamente.');
    }
//mostrar los datos del formulario
    public function index()
{
    $personalInfos = PersonalInfo::all(); // Obtiene todos los registros de la base de datos
    return view('personalinfo.index', compact('personalInfos')); // Pasa los datos a la vista
}
//para mostrar
public function show($id)
{
    $personalInfo = PersonalInfo::findOrFail($id); // Encuentra el registro por ID o falla
    return view('personalinfo.show', compact('personalInfo')); // Envía los datos del form a la vista
}

}
