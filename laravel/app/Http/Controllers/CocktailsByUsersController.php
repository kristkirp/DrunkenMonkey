<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cocktail;
use App\Category;
use App\CocktailIngredient;
use App\Ingredient;
use App\Picture;
use Session;

class CocktailsByUsersController extends Controller
{
    public function loadCocktailCategories ($response = 0)
    {
        $categories = Category::all();

        $data = Array('categories' => $categories, 'response' =>$response);
        return view("cocktail/add-cocktail")->with($data);
    }

    public function addCocktailByUser(Request $req) {
        $this->validate($req,
            [
                'cocktailName' => 'required',
                'recipe' => 'required',
                'serve' =>'required',
                'category' =>'required',
                'imageInput' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $cocktailName = $req->input('cocktailName');
        $ingr1 = $req->input('ingr1');
        $ingr2 = $req->input('ingr2');
        $ingr3 = $req->input('ingr3');
        $ingr4 = $req->input('ingr4');
        $ingr5 = $req->input('ingr5');
        $msr1 = $req->input('msr1');
        $msr2 = $req->input('msr2');
        $msr3 = $req->input('msr3');
        $msr4 = $req->input('msr4');
        $msr5 = $req->input('msr5');
        $recipe = $req->input('recipe');
        $serve = $req->input('serve');
        $category = (int) $req->input('category');
        $created_at = date('Y-m-d H:i:s');
        $image = $req->file('imageInput');

        if(!empty($image)) {
            $name = $image->getClientOriginalName();
            $type= $image->getClientOriginalExtension();
            $destinationPath = public_path('img/userAddedImgOfCocktail');
            $path = url('img/userAddedImgOfCocktail')."/".$name;
            $image->move($destinationPath, $name);
        }

        $cocktailId= Cocktail::create([
                    'ckt_st_name' => $cocktailName,
                    'ckt_st_recipe' => $recipe,
                    'ckt_st_serve' => $serve,
                    'ckt_id_user' => Session::get('id'),
                    'ckt_id_category' => $category,
                    'created_at' => $created_at
        ])->ckt_id_cocktail;

        //var_dump(Session::get('id'));

        if($ingr1!=null || $ingr1!="") {
            $ingredientId1 = Ingredient::create([
                'igr_st_name' => $ingr1
            ])->igr_id_ingredient;

            CocktailIngredient::create([
               'cki_id_cocktail' => $cocktailId,
               'cki_id_ingredient' =>  $ingredientId1,
                'cki_st_measure' => $msr1,
            ]);
            if(!empty($image)||$image!=null||$image=""){
                $pictureId= Picture::create([
                    'pic_st_picname' => $name,
                    'pic_st_type' => $type,
                    'pic_st_picture' => $path,
                    'pic_id_user' => Session::get('id'),
                    'pic_id_cocktail' => $cocktailId
                ])->pic_id_picture;

            }
        }

        if($ingr2!=null ||$ingr2!="") {
            $ingredientId2 = Ingredient::create([
                'igr_st_name' => $ingr2
            ])->igr_id_ingredient;

            CocktailIngredient::create([
                'cki_id_cocktail' => $cocktailId,
                'cki_id_ingredient' =>  $ingredientId2,
                'cki_st_measure' => $msr2,
            ]);
            if(!empty($image)||$image!=null||$image=""){
                Picture::create([
                    'pic_st_picname' => $name,
                    'pic_st_type' => $type,
                    'pic_st_picture' => $path,
                    'pic_id_user' => Session::get('id'),
                    'pic_id_cocktail' => $cocktailId
                ]);
            }
        }

        if($ingr3!=null ||$ingr3!="") {
            $ingredientId3 = Ingredient::create([
                'igr_st_name' => $ingr3
            ])->igr_id_ingredient;

            CocktailIngredient::create([
                'cki_id_cocktail' => $cocktailId,
                'cki_id_ingredient' =>  $ingredientId3,
                'cki_st_measure' => $msr3,
            ]);
            if(!empty($image)||$image!=null||$image=""){
                Picture::create([
                    'pic_st_picname' => $name,
                    'pic_st_type' => $type,
                    'pic_st_picture' => $path,
                    'pic_id_user' => Session::get('id'),
                    'pic_id_cocktail' => $cocktailId
                ]);
            }
        }

        if($ingr4!=null ||$ingr4!="") {
            $ingredientId4 = Ingredient::create([
                'igr_st_name' => $ingr4
            ])->igr_id_ingredient;

            CocktailIngredient::create([
                'cki_id_cocktail' => $cocktailId,
                'cki_id_ingredient' =>  $ingredientId4,
                'cki_st_measure' => $msr4,
            ]);
            if(!empty($image)||$image!=null||$image=""){
                Picture::create([
                    'pic_st_picname' => $name,
                    'pic_st_type' => $type,
                    'pic_st_picture' => $path,
                    'pic_id_user' => Session::get('id'),
                    'pic_id_cocktail' => $cocktailId
                ]);
            }
        }

        if($ingr5!=null ||$ingr5!="") {
            $ingredientId5 = Ingredient::create([
                'igr_st_name' => $ingr5
            ])->igr_id_ingredient;

            CocktailIngredient::create([
                'cki_id_cocktail' => $cocktailId,
                'cki_id_ingredient' =>  $ingredientId5,
                'cki_st_measure' => $msr5,
            ]);
        }
        if(!empty($image)&&$image!=null&&$image!=""){
            Picture::create([
                'pic_st_picname' => $name,
                'pic_st_type' => $type,
                'pic_st_picture' => $path,
                'pic_id_user' => Session::get('id'),
                'pic_id_cocktail' => $cocktailId
            ]);

        }
            $response = 1;
            return redirect('cocktail/add-cocktail/'.$response);

        }

}

