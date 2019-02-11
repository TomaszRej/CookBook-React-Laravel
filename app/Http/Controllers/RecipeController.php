<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    public function index()
      {
        $recipes = Recipe::all();

        return $recipes->toJson();
      }

      public function store(Request $request)
      {
        $recipe = Recipe::create([
          'title' => $request->title,
          'description' => $request->description,
          'ingredients' => $request->ingredients
        ]);

        return response()->json('Project created!');
      }

      public function show($id)
      {
        $recipe = Recipe::find($id);

        return $recipe->toJson();
      }

      public function update(Request $request, $id)
      {
        $recipe = Recipe::findOrFail($id);

        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->ingredients = $request->ingredients;
        

        $recipe->save();

      }


      public function destroy($id)
      {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete(); 
    
      }


}
