<?php 
    class Product{
        private $id;
        private $name;
        private $description;
        private $cost;
        private $price;
        private $stock; 


        public function __construct($id, $description = "", $cost = "", $price = "", $stock = ""){
            $this->id = $id;
            $this->description = $description;
            $this->cost = $cost;
            $this->price = $price;
            $this->stock = $stock;
        }
    
        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getDescription(){
            return $this->description;
        }
    
        public function setDescription($description){
            $this->description = $description;
        }
    
        public function getCost(){
            return $this->cost;
        }
    
        public function setCost($cost){
            $this->cost = $cost;
        }
    
        public function getPrice(){
            return $this->price;
        }
    
        public function setPrice($price){
            $this->price = $price;
        }
    
        public function getStock(){
            return $this->stock;
        }
    
        public function setStock($stock){
            $this->stock = $stock;
        }

        public function getProducts(){
            $products = [
                [
                    "id" => "1",

                    "name" => "Tissot Couturier POWERMATIC 80",

                    "description" => "Esfera negra realzada con manecillas estilo dauphine plateadas. Caja de acero inoxidable en tono plateado con correa de acero inoxidable en tono plateado. Movimiento automático. Resistencia al agua de 100 metros/330 pies. Bisel fijo. Cristal de zafiro resistente a los arañazos. Fondo de caja transparente. Broche de mariposa. Tire / Empuje la corona. Tamaño de la caja 39 mm x 10,8 mm. Banda de 22 mm x 7,75 pulgadas de largo. Reloj Tissot T035.407.11.051.01 Couturier Powermatic 80.",

                    "cost" => "275.70",

                    "price" => "289.99",

                    "stock" => "4"
                ],


                [
                    "id" => "2",

                    "name" => "patek philippe nautilus",

                    "description" => "Vintage 1949 Hamilton Milton 14K Reloj lleno de oro amarillo 982 19J. Funciona fuerte y reduce el tiempo a unos pocos segundos al día.

                    La esfera es 100% original (nunca reacabada). El estuche tiene un grabado en la parte posterior de 1950.
                    
                    El estuche está en buen estado con un desgaste mínimo. Mide aproximadamente 24,5 mm de ancho y aproximadamente 37,2 mm de punta a punta. Ancho de lengüeta de 16 mm.",

                    "cost" => "323.30",

                    "price" => "350.00",

                    "stock" => "10"
                ],

                [
                    "id" => "3",

                    "name" => "Hamilton Jazzmaster Thinline",

                    "description" => "Audaz, fuerte y listo para enfrentar cualquier desafío.Un reloj con espíritu competitivo. Un toque estético elegante para completar la mezcla. Es su socio perfecto para los deportes que le ayuda a superar sus límites en la bicicleta, en la pista o en el sendero. Su bisel con escala de taquímetro, su contrapeso de aguja de cronómetro y sus marcadores en forma de Navaja Suiza, consolidan su compromiso con la hora y precisión de competencia. No puede quedarse atrás.",

                    "cost" => "323.30",

                    "price" => "350.00",

                    "stock" => "2"
                ],

                [
                    "id" => "4",

                    "name" => "Rolex Oysterdate Precision 6694",

                    "description" => "Cuando se sumerge en lo desconocido necesita un equipo en el que pueda confiar siempre. Es una maravilla en ingeniería de precisión y diseño de larga tradición que va hasta lo profundo. Hemos actualizado la caja de acero inoxidable con un deslumbrante acabado mate arenado, y le rendimos homenaje a sus raíces náuticas en la correa de paracord con rastreadores reflectantes que no sólo evoca las cuerdas de un barco sino que también se ajusta de manera segura sobre un traje de buceo. La supervivencia en los confines del mundo exige características de seguridad óptimas, y el Professional Diver ofrece resistencia al agua hasta 200 m, una pantalla luminiscente que es legible en la oscuridad, antimagnetismo y extrema resiliencia. Impecable en condiciones desafiantes, este reloj crea una nueva marca de agua para la tecnología en relojes.",

                    "cost" => "323.30",

                    "price" => "350.00",

                    "stock" => "9"
                ],

                [
                    "id" => "5",

                    "name" => "Victorinox I.N.O.X.",

                    "description" => "Creamos el reloj I.N.O.X. para que resista una vida tan aventurera como la suya. Puede soportar una caída de diez metros, el peso de un tanque de 64 toneladas, estar sumergido a 200 metros bajo el nivel del mar y una temperatura de 90 grados dentro de una lavadora durante dos horas. Además, es exclusivo. Por eso, ver la hora siempre será un placer para usted. De día o de noche, en la oficina o en la montaña, nada supera el diseño duradero y versátil del I.N.O.X. Llévelo en cualquier momento y en todo lugar. Siempre estará listo.",

                    "cost" => "323.30",

                    "price" => "350.00",

                    "stock" => "7"
                ]
            ];

            foreach($products as $p){
                if($this->id == $p["id"]){
                    return $p;
                }
            }

            return [];
        }
    }
?>