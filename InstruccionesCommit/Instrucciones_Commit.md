
<!-- title -->
<h1 align="center">Curso - Crear paquetes reutilizables para Laravel PHP</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Creando tu primer paquete__
<!-- end commit name -->
===

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación del directorio `aprendible`
   
   **El nombre del paquete ya depende de que trate el paquete o el creador del paquete decida el nombre*
   - Creación del directorio `aprendible\first-package`
     - Entramos al directorio desde la terminal
       > cd /c/laragon/www/packages/aprendible/first-package
2. Para crear el archivo usando el comando de composer (debe estar dentro del directorio del paquete desde la terminal)
     > composer init

     **Se muestra un mensaje de composer Welcome to the Composer config generator*
     - Composer pregunta por el nombre del paquete 
       - Si se da enter se queda el nombre sugerido por composer
       - Si se desea cambiar el nombre
         - aprendible/first-package
     - Composer pide por la descripción del paquete (de preferencia en Inglés)
     - Composer pide por el email del autor (en este caso la sugerencia es correcta y se da enter)
     - Composer pide por la estabilidad mínima (de momento se deja vaciío y se da enter) (más adelante se profundiza)
     - Composer pide por el tipo de paquete (se deja vacío y se da enter) (más adelante se profundiza)
     - Composer pide la licencia (se daja vacío y se da enter) (más adelante se profundiza)
     - Composer pide definir las dependencias que necesita este paquete (de momomento no necesita ninguna y aunque las necesitara es preferible definirlas después)
       > no
     - Composer pide definir las dependencias de desarrollo que necesita este paquete (de momomento no necesita ninguna y aunque las necesitara es preferible definirlas después)
       > no
     - Composer pregunta si confirma la generación del archivo (se deja vacío y se da enter ya que por defecto tiene yes)
     - De forma automática se crea el archivo `aprendible\first-package\composer.json`

     **Algunas opciones que se han dejado en blanco posteriormente en el curso se verán un poco más a fondo*
3. Creación del directorio `aprendible\first-package\src`

   **Este directorio contendrá los archivos que creemos para este paquete*
   - Creación y edición del archivo `aprendible\first-package\src\helpers.php`
4. Edición del archivo `aprendible\first-package\composer.json`
   - Se agrega `autoload` para que automáticamente el paquete cargue clases o archivos definidos por el desarrollador

     **Cómo se va a agregar un archivo se usa la llave "files"*
5. Creación y edición del archivo `aprendible\first-package\src\index.php`
   - Se hace el llamado de la función `hello()` incluída en `aprendible\first-package\src\helpers.php`

   **Este archivo es eliminado ya que solo sirvió de prueba*
6. Para que el paquete autocargue el archivo `aprendible\first-package\src\helpers.php` se debe usar el comando
   > composer dump

   **Este comando crea el directorio `aprendible\first-package\vendor` y sus archivos*
7. Para usar el paquete dentro de una aplicación hecha en Laravel 5.8
   - Creación del proyecto package-tester
     > composer create-project --prefer-dist laravel/laravel package-tester "5.8.*"
   - Edición del archivo `package-tester\composer.json`
     - Debe crearse el array `repositories`
       - "type": "path" Es para indicar que es ruta
       - "url": "../aprendible/first-package" Es para indicar donde se encuentra el paquete
   - Para usar el paquete dentro de la aplicación (comprobar que este dentro de la carpeta de la aplicación en la consola /c/laragon/www/packages/package-tester)
     > composer require aprendible/first-package
8. Edición de la vista `package-tester\resources\views\welcome.blade.php`
<!-- end commit instructions -->
===

<!-- notes -->
#### Notas:
- Para crear paquetes en PHP se necesita composer
  - [https://getcomposer.org](https://getcomposer.org/)
- Para usar composer dentro del paquete se necesita un archivo llamado `package.json`
<!-- end notes -->
<!-- === -->

<!-- information -->
<!-- #### Información: -->

<!-- end information -->