<?php 


	$sql_manuales ="INSERT INTO tb_manuales (id_manual, titulo, definicion, url, palabras) VALUES
	(1, 'casos de uso', 'En el Lenguaje de Modelado Unificado, un diagrama de casos de uso es una forma de diagrama de comportamiento UML mejorado. El Lenguaje de Modelado Unificado (UML), define una notación gráfica para representar casos de uso llamada modelo de casos de uso.', 'imagenes/Caso de uso1.jpg', 'Modelado, diagrama, gráfica, uml'),
	(2, 'caso de uso', 'Un caso de uso es una descripción de los pasos o las actividades que deberán realizarse para llevar a cabo algún proceso. Los personajes o entidades que participarán en un caso de uso se denominan actores. En el contexto de ingeniería del software, un caso de uso es una secuencia de interacciones que se desarrollarán entre un sistema y sus actores en respuesta a un evento que inicia un actor principal sobre el propio sistema.', 'imagenes/Caso de uso.jpg', 'descripción, sistema, uso, uml'),
	(3, 'clases', 'En ingeniería de software, un diagrama de clases en Lenguaje Unificado de Modelado (UML) es un tipo de diagrama de estructura estática que describe la estructura de un sistema mostrando las clases del sistema, sus atributos, operaciones (o métodos), y las relaciones entre los objetos', 'imagenes/clases.jpg', 'estática, estructura, Modelado, uml'),
	(4, 'Diagramas de componentes', 'Un diagrama de componentes es un diagrama tipo del Lenguaje Unificado de Modelado. Un diagrama de componentes representa cómo un sistema de software es dividido en componentes y muestra las dependencias entre estos componentes.', 'imagenes/diagrama de componentes.jpg', 'sistema, software, componentes, uml'),
	(5, 'Diagrama de distribución', 'En el diagrama de distribución es donde representamos la estructura de hardware donde estará nuestro sistema o software, para ello cada componente lo podemos representar como nodos, el nodo es cualquier elemento que sea un recurso de hardware, es decir, es nuestra denominación genérica para nuestros equipos.', 'imagenes/diagramas.png', 'distribución, denominación, uml'),
	(6, 'modelo de relación', 'Un diagrama o modelo entidad-relación (a veces denominado por sus siglas en inglés, E-R ''Entity relationship'', o del español DER ''Diagrama de Entidad Relación'') es una herramienta para el modelado de datos que permite representar las entidades relevantes de un sistema de información así como sus interrelaciones y propiedades uml.', 'imagenes/relacion.jpg', 'modelo, diagrama, relación, uml');";

	$sql_resultados ="INSERT INTO tb_resultados (id_resultados, id_signos, id_enfermedades, fecha_resultado) VALUES
	(1, 1, 1, '2017-03-16'),
	(2, 2, 2, '2017-03-21'),
	(3, 3, 3, '2017-03-14'),
	(4, 5, 4, '2017-03-16'),
	(5, 4, 6, '2017-03-20'),
	(6, 6, 5, '2017-01-25'),
	(7, 7, 1, '2017-03-02'),
	(8, 8, 8, '2017-03-07'),
	(9, 1, 6, '2017-03-30'),
	(10, 10, 10, '2017-04-13'),
	(11, 5, 1, '2017-03-27'),
	(12, 12, 12, '2017-03-17'),
	(13, 11, 11, '2017-04-19'),
	(15, 12, 11, '2017-04-18'),
	(100, 9, 9, '2017-03-17');";

	$sql_enfermedades ="INSERT INTO tb_enfermedades (id_enfermedades, enfermedades) VALUES
	(1, 'coronavirus'),
	(2, 'urolitiasis'),
	(3, 'Carbontoxoplasmosis'),
	(4, 'leptospirosis'),
	(5, 'epilepsia'),
	(6, 'Prvovirosis'),
	(7, 'piometra'),
	(8, 'pododermetitis'),
	(9, 'otitis'),
	(10, 'fiebre'),
	(11, 'Encefalitis'),
	(12, 'locura');";

	$sql_sigos_y_sintomas ="INSERT INTO tb_signos_y_sintomas (id_signos, signos_y_sintomas) VALUES
	(1, 'Anorexia'),
	(2, 'Perdida de apetito'),
	(3, 'infeccion mortal'),
	(4, 'Problemas respiratorios'),
	(5, 'Salivacion'),
	(6, 'Diarrea'),
	(7, 'Falta de apetito'),
	(8, 'Inflamacion articular'),
	(9, 'Anemia'),
	(10, 'Peladuras'),
	(11, 'sangrado de las orejas'),
	(12, 'expulsion de pus');";

	$sql_usuarios ="ALTER TABLE tb_enfermedades
	  ADD PRIMARY KEY (id_enfermedades);

	--
	-- Indices de la tabla tb_manuales
	--
	ALTER TABLE tb_manuales
	  ADD PRIMARY KEY (id_manual);

	--
	-- Indices de la tabla tb_resultados
	--
	ALTER TABLE tb_resultados
	  ADD PRIMARY KEY (id_resultados),
	  ADD KEY indice_enfermedades (id_enfermedades),
	  ADD KEY indice_signos (id_signos) USING BTREE;

	--
	-- Indices de la tabla tb_signos_y_sintomas
	--
	ALTER TABLE tb_signos_y_sintomas
	  ADD PRIMARY KEY (id_signos);

	--
	-- Indices de la tabla tb_usuarios
	--
	ALTER TABLE tb_usuarios
	  ADD PRIMARY KEY (documento),
	  ADD KEY index_resultado (id_resultados),
	  ADD KEY index_manual (id_manual);

	--
	-- AUTO_INCREMENT de las tablas volcadas
	--

	--
	-- AUTO_INCREMENT de la tabla tb_manuales
	--
	ALTER TABLE tb_manuales
	  MODIFY id_manual int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
	--
	-- AUTO_INCREMENT de la tabla tb_resultados
	--
	ALTER TABLE tb_resultados
	  MODIFY id_resultados int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;";


?>
