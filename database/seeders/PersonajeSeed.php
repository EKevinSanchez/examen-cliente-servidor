<?php

namespace Database\Seeders;

use App\Models\Personaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonajeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = ['Psylocke', 'Deadpool', 'Fantomex', 'Arcángel', 'Tormenta', 'Puck', 'Espiral', 'Cluster'];
        $descripciones = ['Es una superheroina con habilidades como: Telepatia, Telequinesis, Control de la mente, Habilidad para crear armas de energia psiquica y experta en artes marciales. Principalmente relacionada con los X-Men', 
                        'Antiheroe y mercenario, con habilidades como: alto factor curativo, fuerza, resistencia, agilidad y reflejos superhumanos, experto en artes marciales y en armas, Capacidad de teletransportacion e inmunidad a la telepatia', 
                        'Mercenario y supersoldado, fue creado por el Programa Arma Plus para servir como un centinela contra la población de la Tierra. Posee habilidades como: Gran factor curativo, fuerza, agilidad y reflejos super-humanos, mutiple cerebros, auto-hipnosis y capacidad de entender el lenguaje corporal',
                        'Es un Superheroe y supervillano, el cual posee habilidades de agilidad, sangre curativa y volar. ',
                        'Es una superheroina mutante, la cual posee habilidades como: Manipulacion del tiempo y clima, ademas de poder volar.',
                        'Se desempeña como guardaespaldas, posee habilidades como: fuerza, agilidad y reflejos super-humanos, durabilidad y logenvidad sobrehumana, ademas de ser un experto luchador.',
                        'Es una super villana la cual fue prisionera de Mojo por varios años, donde se convirtió en tutora de las creaciones de Mojo. Tiene las habilidades de teletransportación, Metamorfosis y superfuerza.',
                        'Es el clon femenino de Fantomex, por lo que fue el resultado del Programa Arma Plus de experimentación con híbridos tecnológico-humanos. Nació y fue "evolucionado" artificialmente en El Mundo, un entorno creado por el hombre para crear supersoldados con tecnología centinela.'];
        $imagenes = ['img/hero/psylocke.jpg', 'img/hero/deadpool.jpg', 'img/hero/fantomex.jpg', 'img/hero/arcangel.jpg', 'img/hero/tormenta.jpg', 'img/hero/puck.webp', 'img/hero/espiral.jpg', 'img/hero/cluster.webp'];

        foreach ($nombres as $key => $nombre) {
            $Personaje = new Personaje();
            $Personaje->nombre = $nombre;
            $Personaje->descripcion = $descripciones[$key];
            $Personaje->imagen = $imagenes[$key];
            $Personaje->save();
        }
    
    }
}
