<div class="bg-gray-200 h-48 max-h-full">
    
    <div class="border-b-2 border-gray-500 shadow-lg shadow-cyan-500/50 fixed top-0 left-0 right-0 grid grid-cols-2 bg-gradient-to-r from-green-600 to-green-500 h-14 rounded-lg">
        <div>
            <div class="object-scale-down w-20">
                
            </div>
        </div>
        <div>
            <h1>Examen de Competencia Matematica.</h1>
        </div>
    </div>
    
    <div class="container bg-gray-200  max-w-full max-h my-10">
        <div class="container mx-auto px-10 pb-4 bg-white shadow-lg shadow-cyan-500/50 rounded-lg">
            <form action="{{ route('matematicas.rmate') }}" method="POST" class="mb-3">
                @csrf
                <div class="rounded-lg">
                   <div class="px-2 py-8">
                    <label class="font-bold" for="mail">
                        Ingresa tu Email:
                        <input type="text" id="mail" name="Email" value={{old('Email')}}>
                        
                    </label>

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    
                    <div class="rounded-lg mt-4 pt-2 px-4">
                        <label for="">
                            <p class="font-bold">M1. Luis trabaja en una bodega donde se vende arroz. Por la mañana le surten 1.750 kg y
                                durante el día tiene las siguientes ventas.</p>
                            <p class="font-bold">Al realizar su corte, el informe fue.</p>
                            <div class="flex justify-center">@livewire('r1')</div>
                        </label>
                       <div class="pt-2 grid grid-cols-4">
                        <div class="text-center">
                            <input type="radio" id="a1" name="r1" value="A">
                            <label for="a1">A.Vendió 1021 kg. Sobró 729 kg.</label>
                        </div>
                        <div class="text-center">
                            <input type="radio" id="a2" name="r1" value="B">
                            <label for="a2">B.Vendió 1022 kg. Sobró 728 kg.</label>
                        </div>
                        <div class="text-center">
                            <input type="radio" id="a3" name="r1" value="C">
                            <label for="a3">C.Vendió 1023 kg. Sobró 727 kg.</label>
                        </div>
                        <div class="text-center">
                            <input type="radio" id="a4" name="r1" value="D">
                            <label for="a4">D.Vendió 1024 kg. Sobró 726 kg.</label>
                        </div>
                       </div>
                       
                    </div>
                    
                    <div class="rounded-lg mt-4 pt-4 px-4">
                        <label for="">
                            <p class="font-bold">M2.Luis pregunta a su novia que edad tiene y ella responde con la
                                siguiente expresión:4+2*3^2¿Cuál es la edad de la novia?.</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="b1" name="r2" value="A">
                                <label for="b1">A.16 años.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="b2" name="r2" value="B">
                                <label for="b2">B.22 años.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="b3" name="r2" value="C">
                                <label for="b3">C.24 años.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="b4" name="r2" value="D">
                                <label for="b4">D.40 años.</label>
                            </div>
                           
                        </div>
                    </div>

                    <div class="px-4 rounded-lg mt-4">
                        <label for="">
                            <p class="font-bold">M3.Para alumbrar un parque, se colocan luminarias a lo largo de una
                                longitud de 100 metros, si la primera se coloca en el metro 1, la siguiente en el metro 4,
                                la que sigue en el metro 7, y así sucesivamente. En las siguientes posiciones se colocará
                                una luminaria excepto en el metro.</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="c1" name="r3" value="A">
                                <label for="c1">A.13</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="c2" name="r3" value="B">
                                <label for="c2">B.19</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="c3" name="r3" value="C">
                                <label for="c3">C.21</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="c4" name="r3" value="D">
                                <label for="c4">D.28</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M4.Los ingredientes para preparar una gelatina de fresa para cuatro
                                personas son: 30 gramos de gelatina de fresa y 2 tazas de agua. ¿Qué cantidad de
                                ingredientes serían necesarios para hacer una gelatina para 6 personas?</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="d1" name="r4" value="A">
                                <label for="d1">A.40g de gelatina, 4 tazas de agua.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="d2" name="r4" value="B">
                                <label for="d2">B.45g de gelatina, 3 tazas de agua.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="d3" name="r4" value="C">
                                <label for="d3">C.60g de gelatina, 4 tazas de agua.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="d4" name="r4" value="D">
                                <label for="d4">D.180g de gelatina, 12 tazas de agua.</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M5.Relaciona los lados de la figura con las expresiones de la columna
                                de la derecha.</p>
                                <div class="flex justify-center">@livewire('r5')</div>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="e1" name="r5" value="A">
                                <label for="e1">A. a5, b1, c3, d4.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="e2" name="r5" value="B">
                                <label for="e2">B. a5, b2, c3, d1.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="e3" name="r5" value="C">
                                <label for="e3">C. a5, b4, c3, d2.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="e4" name="r5" value="D">
                                <label for="">D. a5, b4, c2, d3.</label>
                            </div>
                           
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M6.El espacio exterior no está vacío como comúnmente creemos;
                                principalmente se encuentra formado por: *Materia estelar = e Materia y energía oscura =
                                m^2, *Materia y *energía sin identificar = i^3. La siguiente expresión algebraica describe
                                una aproximación de cómo está conformado el espacio exterior considerando a la suma de todos
                                como un 100%. 100 = e + 70m^2 + 4e - 3m^2 - i^3 + 25m^2 Si, simplificamos la expresión
                                algebraica a través de reducción de términos semejantes nos quedaría como:</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="f1" name="r6" value="A">
                                <label for="f1">A.100 = 97 i3m^2e</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="f2" name="r6" value="B">
                                <label for="f2">B.100 = - i3 + 98m^2 + 3e</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="f3" name="r6" value="C">
                                <label for="f3">C.100 = -i3 + 95m^2 + 4e</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="f4" name="r6" value="D">
                                <label for="f4">D.100 = - i3 + 92m^2 + 5e</label>
                            </div>
                           
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M7.Un técnico en sistemas computacionales necesita realizar el
                                producto (x - 2) (x + 3), para determinar la expresión algebraica que debe introducir en el
                                código de seguridad de su programación, ¿cuál es la expresión que deberá codificar?.</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="g1" name="r7" value="A">
                                <label for="g1">A. x^2 + x - 6</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="g2" name="r7" value="B">
                                <label for="g2">B. x^2 - 5</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="g3" name="r7" value="C">
                                <label for="g3">C. x^2 + x + 6</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="g4" name="r7" value="D">
                                <label for="g4">D. x^2 + 3x</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M8.Una balanza bien calibrada asegura que, si colocas el mismo peso
                                sobre ambos platillos permanecerá perfectamente en equilibrio. Por lo tanto, si en uno de
                                ellos colocas 7 monedas de cobre y 300 gramos de arroz, mientras que en el otro colocas 5
                                monedas de cobre exactamente iguales a las anteriores y 500 gramos de semilla, observas que
                                la balanza queda en equilibrio. ¿Cuánto peso hay en el primer platillo?.</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="h1" name="r8" value="A">
                                <label for="h1">A.366g</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="h2" name="r8" value="B">
                                <label for="h2">B.400g</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="h3" name="r8" value="C">
                                <label for="h3">C.762g</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="h4" name="r8" value="D">
                                <label for="h4">D.1000g</label>
                            </div>
                           
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M9.La expresión 9x^2 - 80x - 100 representa la utilidad en la
                                producción de una nueva libreta profesional, ¿para qué valor positivo “x” la utilidad
                                resulta igual a cero?.</p>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="i1" name="r9" value="A">
                                <label for="i1">A.10</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="i2" name="r9" value="B">
                                <label for="">B.10/9</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="i3" name="r9" value="C">
                                <label for="i3">C.770/9</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="i4" name="r9" value="D">
                                <label for="i4">D.670/9</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M10.En una ludoteca cuatro amigos construyeron las siguientes figuras
                                con tangram. ¿Cuál de las siguientes afirmaciones es correcta?.</p>
                            <div class="flex justify-center">@livewire('r10')</div>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="j1" name="r10" value="A">
                                <label for="j1">A.Las figuras 1 y 3 son polígonos congruentes.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="j2" name="r10" value="B">
                                <label for="j2">B.Las figuras 1 y 2 son polígonos congruentes.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="j3" name="r10" value="C">
                                <label for="j3">C.Las figuras 2 y 4 son polígonos congruentes.</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="j4" name="r10" value="D">
                                <label for="">D.Las figuras 3 y 4 son polígonos congruentes.</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="rounded-lg mt-4 px-4">
                        <label for="">
                            <p class="font-bold">M11.El Ing. Flores, requiere conocer el perímetro del primer nivel de
                                una casa, para ello utiliza el plano que se muestra a continuación: ¿Cuál es el perímetro
                                del primer nivel de la casa?.</p>
                                <div class="flex justify-center">@livewire('r11')</div>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="k1" name="r11" value="A">
                                <label for="k1">A.63.5m</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="k2" name="r11" value="B">
                                <label for="k2">B.62.5m</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="k3" name="r11" value="C">
                                <label for="k3">C.57.5m</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="k4" name="r11" value="D">
                                <label for="">D.42.3m</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M12.La siguiente imagen muestra un terreno rectangular de 10 m de
                                frente por 15 m de fondo, el cual se ve afectado por la ampliación de una calle. La línea
                                punteada indica la longitud de la barda a construir.</p>
                            @livewire('r12')
                        </label>
                        <ul>
                            <li><input type="radio" id="l1" name="r12" value="A">
                                <label for="l1">A.109m</label>
                            </li>
                            <li>
                                <input type="radio" id="l2" name="r12" value="B">
                                <label for="l2">B.√169m</label>
                            </li>
                            <li>
                                <input type="radio" id="l3" name="r12" value="C">
                                <label for="l3">C.√109m</label>
                            </li>
                            <li>
                                <input type="radio" id="l4" name="r12" value="D">
                                <label for="l4">D.√26m</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M13.Sergio y Camila, decidieron juntar sus ahorros para comprar una
                                cámara de video que cuesta $5 400.00. Si Sergio puso un medio del costo y Camila un tercio
                                de éste, ¿cuánto dinero les falta y qué fracción representa?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="m1" name="r13" value="A">
                                <label for="m1">A.Faltan $900.00 y es 1/6 del total.</label>
                            </li>
                            <li>
                                <input type="radio" id="m2" name="r13" value="B">
                                <label for="m2">B.Faltan $900.00 y es 5/6 del total.</label>
                            </li>
                            <li>
                                <input type="radio" id="m3" name="r13" value="C">
                                <label for="m3">C.Faltan $4,500.00 y es 1/6 del total.</label>
                            </li>
                            <li>
                                <input type="radio" id="m4" name="r13" value="D">
                                <label for="m4">D.Faltan $4,500.00 y es 5/6 del total.</label>
                            </li>
                        </ul>
                        </label>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M14.El maestro de matemáticas les propone a sus alumnos, que quien
                                determine sus años de experiencia como docente tendrá un punto extra, para ello tendrán que
                                resolver la siguiente expresión. -5 + {4 * 6÷3+1+ [3-(4-8) + (3-2)] } ¿Cuántos años de
                                experiencia tiene el docente?.</p>
                            <ul>
                                <li><input type="radio" id="n1" name="r14" value="A">
                                    <label for="n1">A.12</label>
                                </li>
                                <li>
                                    <input type="radio" id="n2" name="r14" value="B">
                                    <label for="n2">B.9</label>
                                </li>
                                <li>
                                    <input type="radio" id="n3" name="r14" value="C">
                                    <label for="n3">C.6</label>
                                </li>
                                <li>
                                    <input type="radio" id="n4" name="r14" value="D">
                                    <label for="n4">D.3</label>
                                </li>
                            </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M15.En el proceso de mitosis la célula se divide en dos células
                                idénticas, si se repite este proceso en varias ocasiones a partir de una célula inicial.
                                Identifica la sucesión que representa el número de células hasta la tercera división.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="o1" name="r15" value="A">
                                <label for="o1">A.1,2,4,6.</label>
                            </li>
                            <li>
                                <input type="radio" id="o2" name="r15" value="B">
                                <label for="o2">B.1,2,4,8.</label>
                            </li>
                            <li>
                                <input type="radio" id="o3" name="r15" value="C">
                                <label for="o3">C.1,3,7,15.</label>
                            </li>
                            <li>
                                <input type="radio" id="o4" name="r15" value="D">
                                <label for="o4">D.1,2,4,16.</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M16.Las ruedas interiores de la maquinaria de una lavadora, están
                                unidas mediante una banda, si las medidas de sus radios están descritas como se muestra en
                                el esquema siguiente: ¿Qué aseveración es verdadera?.</p>
                            @livewire('r16')
                        </label>
                        <ul>
                            <li><input type="radio" id="p1" name="r16" value="A">
                                <label for="p1">A.Cuando la rueda B da dos vueltas, la rueda A da una vuelta.</label>
                            </li>
                            <li>
                                <input type="radio" id="p2" name="r16" value="B">
                                <label for="p2">B.Cuando la rueda B da una vuelta, la rueda A da tres vueltas.</label>
                            </li>
                            <li>
                                <input type="radio" id="p3" name="r16" value="C">
                                <label for="p3">C.Si la rueda A da una vuelta, la rueda B da dos vueltas.</label>
                            </li>
                            <li>
                                <input type="radio" id="p4" name="r16" value="D">
                                <label for="p4">D.Si la rueda A da una vuelta, la rueda B da tres vueltas.</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M17.De acuerdo a la imagen. Determina el valor de la última expresión.
                            </p>
                            @livewire('r17')
                        </label>
                        <ul>
                            <li><input type="radio" id="q1" name="r17" value="A">
                                <label for="q1">A.15</label>
                            </li>
                            <li>
                                <input type="radio" id="q2" name="r17" value="B">
                                <label for="q2">B.16</label>
                            </li>
                            <li>
                                <input type="radio" id="q3" name="r17" value="C">
                                <label for="q3">C.26</label>
                            </li>
                            <li>
                                <input type="radio" id="q4" name="r17" value="D">
                                <label for="q4">D.28</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M18.En una tienda, 3 veces por semana se hace el registro de la
                                mercancía de mayor consumo: El refresco, la leche y las galletas. Para facilitar el registro
                                se expresan de forma algebraica, utilizando la primera letra de cada artículo como variable,
                                el signo “+” (más) para representar la mercancía entrante y el signo “ - “(menos) para
                                representar la mercancía vendida. En una semana, se obtiene lo siguiente: *1er registro – Se
                                adquieren 12 refrescos y 5 galletas, se venden 8 leches. *2do registro - Se venden 4 leches
                                y 3 refrescos. *3er registro – Se adquieren 2 leches, 4 galletas y se venden 5 refrescos.
                                ¿Qué expresión representa el balance entre el 2do y el 3er registro?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="r1" name="r18" value="A">
                                <label for="r1">A.2R-4G-6L</label>
                            </li>
                            <li>
                                <input type="radio" id="r2" name="r18" value="B">
                                <label for="r2">B.-2R-2L+4G</label>
                            </li>
                            <li>
                                <input type="radio" id="r3" name="r18" value="C">
                                <label for="r3">C.-2L-8R+4G</label>
                            </li>
                            <li>
                                <input type="radio" id="r4" name="r18" value="D">
                                <label for="r4">D.6L+4G-2R</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M19.Dos fichas de dominó se podrán unir siempre y cuando la expresión
                                algebraica de una corresponda al resultado de la operación expresada en la otra. ¿Con cuál
                                de las siguientes opciones se podrá unir la ficha?</p>
                            <div class="flex justify-center">
                                @livewire('q19')
                            </div>
                        </label>
                        <div class="pt-2 grid grid-cols-4">
                            <div class="text-center">
                                <input type="radio" id="s1" name="r19" value="A">
                                <label for="s1" class="flex justify-center">A.- @livewire('r19-a')</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="s2" name="r19" value="B">
                                <label for="s2" class="flex justify-center">B.- @livewire('r19-b')</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="s3" name="r19" value="C">
                                <label for="s3" class="flex justify-center">C.- @livewire('r19-c')</label>
                            </div>
                            <div class="text-center">
                                <input type="radio" id="s4" name="r19" value="D">
                                <label for="s4" class="flex justify-center">D.- @livewire('r19-d')</label>
                            </div>
                        </div>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M20.En una feria, el dueño del juego de canicas tiene tres puestos; le
                                dice a su encargado: “Necesitamos 108 canicas, lleva al primer puesto la cantidad que
                                requieren, al segundo la mitad de lo que necesitaron en el primero y finalmente al puesto
                                número tres lleva lo triple que dejaste en el primero” ¿Qué cantidad de canicas se dejaron
                                en cada puesto?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="t1" name="r20" value="A">
                                <label for="t1">A.Puesto1=18, puesto2=36, puesto3=54</label>
                            </li>
                            <li>
                                <input type="radio" id="t2" name="r20" value="B">
                                <label for="t2">B.Puesto1=24, puesto2=12, puesto3=72</label>
                            </li>
                            <li>
                                <input type="radio" id="t3" name="r20" value="C">
                                <label for="t3">C.Puesto1=33, puesto2=66, puesto3=11</label>
                            </li>
                            <li>
                                <input type="radio" id="t4" name="r20" value="D">
                                <label for="t4">D.Puesto1=72, puesto2=36, puesto3=24</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M21.Se sabe que el trinomio x^2 - 2x - 8 es resultado de la
                                multiplicación de 2 binomios, uno de ellos es (x + 2). ¿Cuál es el otro término?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="u1" name="r21" value="A">
                                <label for="u1">A.(x + 2)</label>
                            </li>
                            <li>
                                <input type="radio" id="u2" name="r21" value="B">
                                <label for="u2">B.(x-2)</label>
                            </li>
                            <li>
                                <input type="radio" id="u3" name="r21" value="C">
                                <label for="u3">C.(x + 4)</label>
                            </li>
                            <li>
                                <input type="radio" id="u4" name="r21" value="D">
                                <label for="u4">D.(x-4)</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M22.Al doblar una hoja rectangular, como se observa en la Figura, se
                                obtienen tres triángulos. ¿Cuál de las siguientes afirmaciones sobre los triángulos es
                                verdadera?.</p>
                            @livewire('r22')
                        </label>
                        <ul>
                            <li><input type="radio" id="v1" name="r22" value="A">
                                <label for="v1">A.2 y 3 son semejantes porque todos sus ángulos son iguales.</label>
                            </li>
                            <li>
                                <input type="radio" id="v2" name="r22" value="B">
                                <label for="v2">B.1 y 2 son semejantes porque son del mismo tamaño y misma forma.</label>
                            </li>
                            <li>
                                <input type="radio" id="v3" name="r22" value="C">
                                <label for="v3">C.1 y 2 son congruentes porque sus lados son proporcionales.</label>
                            </li>
                            <li>
                                <input type="radio" id="v4" name="r22" value="D">
                                <label for="v4">D.2 y 3 son congruentes por que dos de sus ángulos son diferentes.</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M23.Se cocina una pizza de 20 cm de radio, en su interior se coloca al
                                azar 12 piezas de salami circular de 1 cm de radio y en al área restante se pondrá queso.
                                ¿Qué área se tiene para el queso? (Expresar el resultado en términos de π).</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="w1" name="r23" value="A">
                                <label for="w1">A.240π cm2</label>
                            </li>
                            <li>
                                <input type="radio" id="w2" name="r23" value="B">
                                <label for="w2">B.388π cm2</label>
                            </li>
                            <li>
                                <input type="radio" id="w3" name="r23" value="C">
                                <label for="w3">C.399π cm2</label>
                            </li>
                            <li>
                                <input type="radio" id="w4" name="r23" value="D">
                                <label for="w4">D.412π cm2</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M24.En la ciudad de México se van a colocar tres postes con alarmas
                                sísmicas. El poste que está en parque Águilas forma un ángulo recto con los otros dos
                                postes. La distancia del poste de Mixcoac a Acacias es de 25 km y de Mixcoac a parque
                                Águilas es de 15 km. ¿Qué distancia recorrerá la señal entre los postes de Acacias y parque
                                Águilas?.</p>
                            @livewire('r24')
                        </label>
                        <ul>
                            <li><input type="radio" id="x1" name="r24" value="A">
                                <label for="x1">A.10 km</label>
                            </li>
                            <li>
                                <input type="radio" id="x2" name="r24" value="B">
                                <label for="x2">B. 20 km</label>
                            </li>
                            <li>
                                <input type="radio" id="x3" name="r24" value="C">
                                <label for="x3">C. 400 km</label>
                            </li>
                            <li>
                                <input type="radio" id="x4" name="r24" value="D">
                                <label for="x4">D. 850 km</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M25.Se realizó una encuesta para saber cuál es la red social que se
                                utiliza más. Los resultados arrojaron que tres de cada cinco de los encuestados prefieren
                                utilizar Facebook. Si la encuesta se aplicó a 600 adolescentes, ¿cuántos prefieren
                                Facebook?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="y1" name="r25" value="A">
                                <label for="y1">A.200</label>
                            </li>
                            <li>
                                <input type="radio" id="y2" name="r25" value="B">
                                <label for="y2">B.120</label>
                            </li>
                            <li>
                                <input type="radio" id="y3" name="r25" value="C">
                                <label for="y3">C. 360</label>
                            </li>
                            <li>
                                <input type="radio" id="y4" name="r25" value="D">
                                <label for="">D. 240</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M26.Juan participa en rally matemático de la escuela; en la última
                                estación le piden resolver mediante la jerarquía de operaciones el siguiente ejercicio: (2 -
                                3 x 4 + 5^2) ÷ 3. ¿Cuál es la respuesta que debe dar para ganar?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="z1" name="r26" value="A">
                                <label for="z1">A.0</label>
                            </li>
                            <li>
                                <input type="radio" id="z2" name="r26" value="B">
                                <label for="z2">B.2</label>
                            </li>
                            <li>
                                <input type="radio" id="z3" name="r26" value="C">
                                <label for="z3">C.5</label>
                            </li>
                            <li>
                                <input type="radio" id="z4" name="r26" value="D">
                                <label for="z4">D.7</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M27.Actualmente la participación de las mujeres en las actividades
                                laborales ha crecido favorablemente, por ejemplo, en el poblado de las Flores, 760 mujeres
                                de un total de 1,300 trabajan fuera de casa con remuneración económica. ¿Qué porcentaje
                                representan las mujeres trabajadoras en esa comunidad?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="aa1" name="r27" value="A">
                                <label for="aa1">A.5.84%</label>
                            </li>
                            <li>
                                <input type="radio" id="aa2" name="r27" value="B">
                                <label for="aa2">B.17.1%</label>
                            </li>
                            <li>
                                <input type="radio" id="aa3" name="r27" value="C">
                                <label for="aa3">C.41.5%</label>
                            </li>
                            <li>
                                <input type="radio" id="aa4" name="r27" value="D">
                                <label for="aa4">D.58.4%</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M28.En un museo se colocará el siguiente diseño en el piso. Identifica
                                los triángulos congruentes.</p>
                            @livewire('r28')
                        </label>
                        <ul>
                            <li><input type="radio" id="bb1" name="r28" value="A">
                                <label for="bb1">A.1 y 2</label>
                            </li>
                            <li>
                                <input type="radio" id="bb2" name="r28" value="B">
                                <label for="bb2">B.3 y 4</label>
                            </li>
                            <li>
                                <input type="radio" id="bb3" name="r28" value="C">
                                <label for="bb3">C.5 y 6</label>
                            </li>
                            <li>
                                <input type="radio" id="bb4" name="r28" value="D">
                                <label for="bb4">D.4 y 6</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M29.¿Cuál es el criterio de semejanza que se cumple en los siguientes
                                triángulos?.</p>
                            @livewire('r29')
                        </label>
                        <ul>
                            <li><input type="radio" id="cc1" name="r29" value="A">
                                <label for="cc1">A.LAL</label>
                            </li>
                            <li>
                                <input type="radio" id="cc2" name="r29" value="B">
                                <label for="cc2">B.LLL</label>
                            </li>
                            <li>
                                <input type="radio" id="cc3" name="r29" value="C">
                                <label for="cc3">C.ALA</label>
                            </li>
                            <li>
                                <input type="radio" id="cc4" name="r29" value="D">
                                <label for="cc4">D.AAA</label>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4">
                        <label for="">
                            <p class="font-bold">M30.Una botella de agua de 3/4 de litro de capacidad, tiene solo la
                                mitad de líquido, ¿qué cantidad de litros de agua tiene la botella?.</p>
                        </label>
                        <ul>
                            <li><input type="radio" id="dd1" name="r30" value="A">
                                <label for="dd1">A.3/2 de litro</label>
                            </li>
                            <li>
                                <input type="radio" id="dd2" name="r30" value="B">
                                <label for="dd2">B.3/8 de litro</label>
                            </li>
                            <li>
                                <input type="radio" id="dd3" name="r30" value="C">
                                <label for="dd3">C.8/3 de litro</label>
                            </li>
                            <li>
                                <input type="radio" id="dd4" name="r30" value="D">
                                <label for="dd4">D.1/2 de litro</label>
                            </li>
                        </ul>
                    </div>
                        <div class="flex justify-center pb-2">
                            <button type="submit" class="px-8 py-4 bg-orange-500 hover:bg-orange-700 text-black font-bold rounded-full">Enviar Examen</button>
                        </div>
            </form>
        </div>
    </div>
    
</div>
