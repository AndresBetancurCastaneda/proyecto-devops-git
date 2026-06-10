# Proyecto Containers

## Descripcion
Este proyecto implementa un sistema CRUD (Create, Read, Update, Delete) que permite gestionar información de manera eficiente mediante las operaciones básicas de creación, consulta, actualización y eliminación de registros. La aplicación facilita la administración de datos a través de una interfaz intuitiva, garantizando un manejo organizado y dinámico de la información almacenada.

Las funcionalidades principales son:

Crear: Registrar nuevos datos en el sistema.
Leer: Consultar y visualizar los registros existentes.
Actualizar: Modificar la información de registros previamente creados.
Eliminar: Borrar registros que ya no sean necesarios.

Este CRUD fue desarrollado con el objetivo de fortalecer las competencias en desarrollo de software, aplicando conceptos de programación, gestión de datos y diseño de aplicaciones.

## Código duplicado o poco mantenible: 

**Dónde:**
en todos los archivos (index.php, guardar.php, editar.php, etc.) 
**Por qué:** 
se repite el código para leer y guardar el JSON. 

Si cambias algo, tienes que modificarlo en muchos lugares. 

  

## Ausencia de pruebas: 

**Dónde:**
en guardar.php y actualizar.php 

**Por qué:** 
se usan datos como $_POST['nombre'] sin validar. 

Puede guardar datos vacíos o incorrectos. 

  

## Documentación deficiente: 

**Dónde:** en todo el proyecto 

**Por qué:** no hay comentarios ni README. 

Otra persona no entiende fácilmente cómo funciona. 

  

## Configuración manual de ambientes: 

**Dónde:** en las rutas como "data/usuarios.json" 

**Por qué:** están escritas directamente en el código. 

Si cambias de servidor o carpeta, puede fallar. 

  

## Dependencias desactualizadas: 

**Dónde:** no aplica mucho 

**Por qué:** no se usan librerías complejas, solo Bootstrap CDN. 

En este proyecto no es un problema grande. 

  

## Despliegues sin control: 

**Dónde:** en la forma de subir el proyecto 

**Por qué:** no hay proceso automático ni control de versiones. 

Se copia manualmente y puede generar errores. 

  

## Correcciones directas en producción: 

**Dónde:** al editar archivos o el JSON directamente 

**Por qué:** no hay ambiente de pruebas. 

Puedes dañar datos o romper el sistema. 


# Actividades del proyecto

## Limpiar la consola
•	CMD 
cls
•	Ubuntu (bash) 
clear también sirve: Ctrl + L
•	PowerShell 
Clear-Host
 también: cls (alias)

## Ver historial de comandos
•	CMD 
doskey /history

•	Ubuntu (bash) 
history
## Ver archivo directamente:
cat ~/.bash_history

•	PowerShell 
Get-History
## Ejecutar uno del historial:
Invoke-History 1


 1. Ver ubicación actual
•	CMD 
cd
•	Ubuntu (bash) 
pwd
•	PowerShell 
Get-Location

 2. Listar contenido
•	CMD 
dir
•	Ubuntu 
ls
•	PowerShell 
Get-ChildItem

 3. Ver más detalle
•	CMD 
dir
 (CMD ya muestra bastante info)
•	Ubuntu 
ls -l
•	PowerShell 
Get-ChildItem | Format-List

 4. Ir al directorio personal
•	CMD 
cd %USERPROFILE%
•	Ubuntu 
cd ~
•	PowerShell 
cd ~

 5. Crear carpeta
•	CMD 
mkdir devops_semana2
•	Ubuntu 
mkdir devops_semana2
•	PowerShell 
mkdir devops_semana2

 6. Entrar a la carpeta
•	Todos 
cd devops_semana2

️ 7. Crear subcarpetas
•	CMD 
mkdir scripts logs configs docs
•	Ubuntu 
mkdir scripts logs configs docs
•	PowerShell 
mkdir scripts, logs, configs, docs

 8. Navegar
Entrar:
cd scripts
Volver:
cd ..

 9. Ver estructura
•	CMD 
tree
•	Ubuntu 
tree
(si no sirve: sudo apt install tree)
•	PowerShell 
tree

 Resumen rápido:
•	CMD usa: dir 
•	Ubuntu usa: ls 
•	PowerShell usa: Get-ChildItem
1. Crear archivo README.md
•	CMD 
echo. > README.md
•	Ubuntu 
touch README.md
•	PowerShell 
New-Item README.md

2. Crear archivo notas.txt
•	CMD 
echo. > notas.txt
•	Ubuntu 
touch notas.txt
•	PowerShell 
New-Item notas.txt

 3. Verificar archivos
•	CMD 
dir
•	Ubuntu 
ls
•	PowerShell 
Get-ChildItem

4. Copiar README.md a docs
•	CMD 
copy README.md docs\
•	Ubuntu 
cp README.md docs/
•	PowerShell 
Copy-Item README.md docs\

 5. Mover notas.txt a logs
•	CMD 
move notas.txt logs\
•	Ubuntu 
mv notas.txt logs/
•	PowerShell 
Move-Item notas.txt logs\

 6. Crear carpeta temp
•	Todos 
mkdir temp

 7. Crear archivo de prueba y moverlo
Crear archivo:
•	CMD 
echo. > prueba.txt
•	Ubuntu 
touch prueba.txt
•	PowerShell 
New-Item prueba.txt
Moverlo:
•	CMD 
move prueba.txt temp\
•	Ubuntu 
mv prueba.txt temp/
•	PowerShell 
Move-Item prueba.txt temp\

 8. Eliminar archivo de prueba
•	CMD 
del temp\prueba.txt
•	Ubuntu 
rm temp/prueba.txt
•	PowerShell 
Remove-Item temp\prueba.txt

️ 9. Eliminar carpeta temp
•	CMD 
rmdir /s temp
•	Ubuntu 
rmdir temp
 (solo si está vacía)
•	PowerShell 
Remove-Item temp -Recurse

 10. Ver contenido de README.md
•	CMD 
type README.md
•	Ubuntu 
cat README.md
•	PowerShell 
Get-Content README.md

## Actividad 4

 1. Ir al directorio principal del ejercicio
cd ~/mi_proyecto
 2. Entrar a la carpeta docs
cd docs
 3. Listar contenido de logs (ruta relativa)
ls logs
 4. Volver al directorio inicial
cd ..
 5. Listar lo mismo con ruta absoluta
ls /home/$USER/mi_proyecto/docs/logs
 6. Crear un archivo con texto
echo "Hola desde Ubuntu" > archivo.txt
 7. Ver el contenido del archivo
cat archivo.txt
 8. Ejemplos de rutas
🔹 Relativas (desde donde estás)
docs/logs
../docs/logs



