<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        public function index()
        {
            // Recuperar as últimas 3 perguntas
            $questions = Question::latest()->take(3)->get();
        
            // Você já tem a lógica para os banners
            $imageDirectory = 'carousel';
            $defaultImages = [
                'defaultBanner1.jpg',
                'defaultBanner2.jpg',
                'defaultBanner3.jpg',
            ];
        
            $images = [];
        
            for ($i = 1; $i <= 3; $i++) {
                $filename = "carouselImage{$i}.jpg";
        
                // Verifica se a imagem personalizada existe
                if (Storage::disk('public')->exists("$imageDirectory/$filename")) {
                    // URL pública da imagem armazenada
                    $images[] = asset("storage/$imageDirectory/$filename");
                } else {
                    // URL da imagem padrão
                    $images[] = asset("assets/images/banners/{$defaultImages[$i - 1]}");
                }
            }
        
            // Passar tanto as imagens quanto as perguntas para a view
            return view('index', compact('images', 'questions'));
        }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $savedImages = [];

        for ($i = 1; $i <= 3; $i++) {
            $imageKey = "image$i";

            if ($request->hasFile($imageKey)) {
                // Salva a imagem no diretório public/carousel
                $path = $request->file($imageKey)->storeAs('carousel', "carouselImage$i.jpg", 'public');
                $savedImages[] = $path;
            }
        }

        return redirect()->route('dashboard')->with('status', 'Imagens salvas com sucesso!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
