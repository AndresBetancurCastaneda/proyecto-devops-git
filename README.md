# Producto Final Integrador - EcoVerde Antioquia S.A.S.

## 📌 Introducción
Este proyecto corresponde al producto final integrador del programa **Análisis y Desarrollo de Software (ADSO)**.  
El caso propuesto busca modernizar los despliegues de la empresa **EcoVerde Antioquia S.A.S.**, aplicando prácticas DevOps para lograr trazabilidad, consistencia en entornos y observabilidad básica de los servicios.

---

## 🚀 Instrucciones de ejecución

1. **Clonar el repositorio**
   bash
   git clone https://github.com/usuario/producto-final-devops.git
   cd producto-final-devops

## Construir la imagen Docker

bash
docker build -t ecoverde-app:1.0 .
Levantar servicios con Docker Compose

bash
docker compose up -d

## Acceder a la aplicación

Navegar a: http://localhost:8080

Endpoint de salud: http://localhost:8080/health

## Ejecutar pipeline CI/CD

El workflow de GitHub Actions se ejecuta automáticamente al hacer push al repositorio.

## Desplegar en Kubernetes

bash
kubectl apply -f kubernetes/namespace.yaml
kubectl apply -f kubernetes/deployment.yaml
kubectl apply -f kubernetes/service.yaml

# Explicación técnica
## Cultura DevOps
Se aplicaron buenas prácticas de integración continua, despliegue automatizado y observabilidad.

Se redujo deuda técnica mediante control de versiones y automatización.

## Control de versiones
Repositorio en GitHub con mínimo 5 commits claros.

Ejemplo de commit: "Agrego Dockerfile seguro con usuario no-root".

## Docker
Dockerfile define la imagen base, usuario no-root y healthcheck.

compose.yml levanta servicios con volumenes, secretos y restart policy.

CI/CD
Workflow en .github/workflows/pipeline.yml que construye la imagen y ejecuta pruebas básicas.


## Kubernetes
namespace.yaml: crea el espacio de nombres semana8.

deployment.yaml: despliega la aplicación con 1 réplica.

service.yaml: expone el servicio vía ClusterIP.

IaC (Infraestructura como Código)
Los manifiestos de Kubernetes son ejemplos de configuración declarativa versionada.

Se incluyen en el repositorio para trazabilidad y reproducibilidad.

## Observabilidad
Logs: capturados con docker logs, mostrando respuestas 200 OK y errores como BrokenPipeError.

Métricas: obtenidas con docker stats y kubectl top pods.

Carpeta evidencias/ contiene capturas (docker-ps.png, logs-metricas.png, kubectl-get-pods.png).



