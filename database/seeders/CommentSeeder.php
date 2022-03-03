<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artwork;
use App\Models\Comment;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $primeros = User::all();
        $segundos = User::all();
        foreach (Artwork::all() as $artwork) {
            foreach ($primeros as $key1 => $user) {
                if (rand(0, 1) == 1) { //si la obra tiene comentarios
                    $new_comment = Comment::create([
                        'artwork_id' => $artwork->id,
                        'user_id' => $user->id,
                        'content' => 'comentario'.$key1
                    ]);
                    if (rand(0, 1) == 1) { //si el comentario tiene respuestas
                        foreach ($segundos as $key2 => $user2) {
                            if (rand(0,1) == 1) { //si este usuario responde
                                $answer = Comment::create([
                                    'artwork_id' => $artwork->id,
                                    'user_id' => $user->id,
                                    'content' => 'comentario respuesta'.$key1.'-'.$key2,
                                    'comment_id' => $new_comment->id
                                ]);                                
                            }
                        }
                    }
                }
            }
        }
    }
}
