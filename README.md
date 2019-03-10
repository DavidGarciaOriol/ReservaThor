# ReservaThor

## Instalación

 - Iicialmente instalar Composer y Telescope.
 - Modificar el .env y asignar las bases de datos corespondientes. Dejar Telescope desactivado.
 - Hecho todo, correr los tests correspondientes para comprobar que las funcionalidades básicas de la aplicación funcionan correctamente.
 
## Empleo
 
 - Desde el NavBar superior se puede acceder a la opción de listar las salas y de ver los tipos de sala como usuario invitado.
 - Cada elemento tiene un desplegable que te permite acceder a los diferentes sitios relacionados con ese elemento.
 - El login y register se encuentran en la parte superior derecha.
 - En la página principal se puede ver un elemento Jumbotron y un Carousel con información y acceso a funcionalidades de la aplicación, limitadas en función de si el usuario está o no autenticado en la página.
 - A la hora de acceder a las listas, tenemos una paginación, para acceder fácilmente a todos los elementos ordenadamente. Cada elemento está estructurado en una card, y tienen botones de acceso rápido para editarlos, borrarlos o acceder a una información detallada de ellos, en este caso, de las salas.
 - Los tipos también se listan en una card, pero al ser elementos fijos, no es necesario interactuar con ellos, más allá de ver de un vistazo rápido su información.
 - Se puede acceder a la lista de salas que ha añadido un usuario al clickar en su nombre de usuario, el cual está añadido en la card de dicha sala. Funciona con una paginación similar.
 - La información sobre la aplicación se encuentra en 'About' (un buen conjunto de lorems de momento). Aquí se puede acceder a los distintos apartados desde los enlaces de un scrollspy. (Realmente puede no ser necesario, dependiendo del tamaño de tu pantalla, no se notaría mucho).
 - Las tablas y relaciones dadas a la reservación de salas están creadas, pero la funcionalidad aaún no ha sido implemenada con éxito, por lo tanto, no se pueden crear reservas. Igualmente aparecen una lista actualmente vacías de lo que serían futuramente las reservas de tu persona como usuario, así como acceso al formulario para crear una, pero sin posibilidad de enviar los datos.
 - La aplicación cuenta con notificaciones cada vez que ocurre algún evento en ésta relacionado contigo como usuario; en este caso, cuando creas una sala. Estas se muestran con una insignia al lado de tu nombre de usuario.
 - A la hora de editar un elemento, el sistema te envía a un formulario similar al de creación, donde podrás configurar parámetros de la sala previamente creada, para ajustarla correctamente. Los cambios se guardarán adecuadamente.
 - Cada formulario te responderá con un error correspondiente en caso de que introduzcas algún parámetro inválido, mediante validación básica. De momento no es especialmente compleja.
