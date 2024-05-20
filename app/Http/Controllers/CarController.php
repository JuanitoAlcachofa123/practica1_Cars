<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Listado de la estructura
    public function index()
    {
        return response()->json(Car::all(), 200);
    }

    // Búsqueda de una tupla
    public function show($id)
    {
        $car = Car::find($id);
        if ($car) {
            return response()->json($car, 200);
        } else {
            return response()->json(['error' => 'Car not found'], 404);
        }
    }

    // Registrar un nuevo elemento
    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    // Editar un registro
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        if ($car) {
            $request->validate([
                'make' => 'sometimes|string|max:255',
                'model' => 'sometimes|string|max:255',
                'year' => 'sometimes|integer',
                'color' => 'sometimes|string|max:255',
                'price' => 'sometimes|numeric',
            ]);

            $car->update($request->all());

            return response()->json($car, 200);
        } else {
            return response()->json(['error' => 'Car not found'], 404);
        }
    }

    // Eliminar un registro
    public function destroy($id)
    {
        $car = Car::find($id);
        if ($car) {
            $car->delete();
            return response()->json(null, 204);
        } else {
            return response()->json(['error' => 'Car not found'], 404);
        }
    }
}
