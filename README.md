<h2>Arrancar Docker</h2>
<p>Ejecutar:</p>
```bash
./vendor/bin/sail up
```

<p>Entrar en la web:</p>
http://localhost

<h2>Actualizar traducciones</h2>
<p>Ejecutar:</p>
```bash
./vendor/bin/sail php artisan translatable:export eu
```

<p>Para editarlas abrir el fichero:</p>
```bash
/resources/lang/eu.json
```

<h2>Parar Docker</h2>
```bash
./vendor/bin/sail down 
```