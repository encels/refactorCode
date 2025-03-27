**Malas Prácticas de Programación en el Código**
================================================

El código presenta numerosas malas prácticas que hacen que sea un código sucio, que no cumple con principios SOLIDs de Clean Code, es poco extensible y muy dificil de mantener en el tiempo.

Aquí señalamos las malas prácticas, el análisis de estas a través de la opinión y la corrección realizada después de la refactorización del código haciendo uso de buenas prácticas, recomendaciones de Código Limpio y estrategias de ingenería del software para corregir las fallas.

1\. Falta de consistencia en enunciado e implementación
-------------------------------------------------------

**Problema identificado:**

*   Se mencionó que los parámetros se reciben por POST, pero en el código se obtienen mediante GET.
    

**Opinión:** Esto muestra una falta de claridad en la intención del código y en cómo interactúa con el sistema. La falta de consistencia puede generar confusión para otros desarrolladores y errores en la integración con otras partes del sistema.

**Corrección luego de la refactorización:** Se mantiene la consistencia con el enunciado y se usa el método POST para la obtención de los parámetros usados. 

2\. Comentarios poco útiles
---------------------------

**Problema identificado:**

*   Exceso de comentarios sin utilidad, posiblemente código antiguo o desechado.
    

**Opinión:** El exceso de comentarios innecesarios es una señal de "código sucio". En lugar de explicar el código con comentarios, el código debería ser lo suficientemente claro por sí mismo. Los comentarios solo deberían usarse para explicar decisiones complejas o proporcionar contexto adicional.

**Corrección luego de la refactorización:** Se eliminan los comentarios innecesarios y se añaden solo los que ayuden a entender el código.

3\. Falta al principio de Single Responsibility (SRP)
-----------------------------------------------------

**Problema identificado:**

*   Hay demasiadas responsabilidades agrupadas en una sola función.
    

**Opinión:** Este es uno de los problemas más graves del código original, ya que viola el principio de responsabilidad única (SRP) de SOLID. Una función o clase que hace demasiadas cosas es difícil de entender, probar y mantener.

**Corrección luego de la refactorización:**  Se divide en funciones y clases que van a tener una única responsabilidad, cada segmento de código será responsable de un solo ajuste ayudando a entender y probar de maner más sencilla.

4\. Código difícil de leer
--------------------------

**Problema identificado:**

*   Código largo, confuso y poco dividido.
    

**Opinión:** El código difícil de leer afecta directamente la productividad y aumenta el riesgo de errores. Un código limpio debe ser fácil de entender para cualquier desarrollador.

**Corrección luego de la refactorización:** se crea una estructura de directorios adecuadas, se separan los códigos en distintos archivos y se reduce la longitud de lineas en cada archivo para que sea más fácil de entender.

5\. Uso de nombres de variables poco descriptivos
-------------------------------------------------

**Problema identificado:**

*   Las variables tienen nombres poco significativos.
    

**Opinión:** Los nombres de variables que no son descriptivos dificultan la comprensión del código. Esto va en contra de las buenas prácticas de Clean Code, que enfatizan la importancia de nombres claros y significativos.

**Corrección luego de la refactorización:** Se cambian nombres de variables y funciones para que se entienda mejor.

6\. No hay documentación de qué significan los Status
-----------------------------------------------------

**Problema identificado:**

*   No se explica qué representan los valores de status\_id.
    

**Opinión:** Esto es un claro ejemplo de código "mágico" (uso de números o cadenas sin contexto). Sin documentación, es difícil entender qué significan estos valores o cómo afectan el flujo del programa.

**Corrección luego de la refactorización:** Se establecen constantes que ayuden a identificar de manera más clara el objetivo de estos status.

7\. Excesivo acoplamiento
-------------------------

**Problema identificado:**

*   El código depende de múltiples entidades y servicios.
    

**Opinión:** Un alto acoplamiento hace que el código sea difícil de modificar o extender, ya que cualquier cambio en una parte afecta a muchas otras. Esto viola el principio de inversión de dependencias (DIP) de SOLID.

**Corrección luego de la refactorización:** Se desacopla, se usan interfaces para separar funcionalidades y se hacen uso de patrones de diseños para separar la logica de negocios de las dependencias específicas

8\. No hay manejo de errores
----------------------------

**Problema identificado:**

*   No se manejan errores ni excepciones.
    

**Opinión:** Esto es un problema crítico, ya que un fallo en el código no se comunica adecuadamente al usuario ni al desarrollador. Esto puede causar comportamientos inesperados y dificultar la depuración.

**Corrección luego de la refactorización:** se implementó el manejo de excepciones con mensajes claros y significativos.

9\. Mal manejo de respuestas
----------------------------

**Problema identificado:**

*   No está claro cómo se identifican los estados ni cómo se manejan las respuestas.
    

**Opinión:** El manejo inconsistente de respuestas puede causar problemas en la comunicación entre el backend y el frontend.

**Corrección luego de la refactorización:** Se estableció un estandar de respuesta más claro y homogeneo para mantener la consistencia y claridad en los mensajes devueltos.

10\. Repetición de código y funcionalidades
-------------------------------------------

**Problema identificado:**

*   Código repetido y redundante.
    

**Opinión:** La repetición de código es una señal de mal diseño. Va en contra del principio DRY (Don't Repeat Yourself) y aumenta el riesgo de errores.

**Corrección luego de la refactorización:** Se eliminó código repetitivo y redudante

11\. No hay patrones de diseño
------------------------------

**Problema identificado:**

*   No se usan patrones de diseño.
    

**Opinión:** Los patrones de diseño son herramientas clave para estructurar el código de manera clara, extensible y mantenible. La ausencia de patrones indica un diseño que no sigue principios bien establecidos.

**Corrección luego de la refactorización: Se usaron patrones de diseño para estructurar de manera más limpia el codigo y hacerlo más mantenible**
