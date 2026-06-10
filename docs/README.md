# Proyecto Containers

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
