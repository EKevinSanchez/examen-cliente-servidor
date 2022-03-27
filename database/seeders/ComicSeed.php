<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres =['X-Force Vol. 1','X-Force Vol. 2','Uncanny X-Force'];
        $sinopsis = ['¡Cable ha vuelto! Ahora, con una nueva X-Force a su lado, debe enfrentarse a las amenazas que nadie más puede conocer. Pero, ¿quiénes son los nuevos reclutas de Cable y por qué su equipo es el enemigo público número uno? Atrapados in fraganti en la escena de un ataque terrorista contra una importante corporación estadounidense cuyo director general ha expresado opiniones contrarias a los mutantes, la X-Force se encuentra a la fuga, con nada menos que los Uncanny Avengers en plena persecución.',
                    '¡Es X-Men: ReLoad Wave 2! Rob Liefeld y Fabian Nicieza regresan al título que hicieron famoso: ¡X-FORCE! ¡Cable, Domino, Cannonball, Shatterstar, Warpath y todos los demás regresan en esta nueva serie! Nuevos héroes, nuevos villanos y gran acción... ¡X-Force tal como lo quieres!',
                    'Psylocke, Arcángel, Deadpool y Fantomex se inscriben en el escuadrón secreto de asesinos de Wolverine, pero su primera misión –lidiar con Apocalypse, el déspota, renacido como un niño inocente–, proyecta una sombra muy pesada.'];
        $imagenes = ['img/comic/X-Force_Vol_1_1.webp','img/comic/X-Force_Vol_2.jpg','img/comic/uncanny_x-force.webp'];

        foreach ($nombres as $key => $nombre) {
            $Comic = new Comic();
            $Comic->nombre = $nombre;
            $Comic->sinopsis = $sinopsis[$key];
            $Comic->imagen = $imagenes[$key];
            $Comic->save();
        }
    }
}
