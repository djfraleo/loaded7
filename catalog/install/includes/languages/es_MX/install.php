#  $Id: install.php v1.0 2012-12-08 datazen $
#
#  LoadedCommerce, Innovative eCommerce Solutions
#  http://www.loadedcommerce.com
#
#  Copyright (c) 2012 Loaded Commerce, LLC
#
#  @author     LoadedCommerce Team
#  @copyright  (c) 2012 LoadedCommerce Team
#  @license    http://loadedcommerce.com/license.html

page_title_installation = Nueva Instalacion

page_heading_step_1 = Servidor Base de Datos
page_heading_step_2 = Servidor Web
page_heading_step_3 = Parametros de la Tienda Online
page_heading_step_4 = ¡Finalizado!

text_installation = Esta rutina de instalacion basada en web configurará correctamente Loaded Commerce para correr en este servidor. Por favor siga las instrucciones en pantalla que lo llevara a traves de la configuracion del servidor de based de datos, el servidor web, y las opciones de configuracion de la tienda. Si necesitara ayuda en cualquier etapa, por favor consulte la documentacion o busque ayuda en los foros de soporte comunitarios.
text_successful_installation = ¡La instalacion y configuracion fueron exitosas!
text_go_to_shop_after_cfg_file_is_saved = Por favor visite su tienda despues de que el archivo de configuracion haya sido guardado:

param_database_server = Anfitrion de la Base de Datos
param_database_server_description = La direccion del servidor de la base de datos en el formato de un hostname o direccion IP.
param_database_username = Nombre de Usuario
param_database_username_description = El usuario utilizado para conectar al servidor de base de datos.
param_database_password = Contraseña
param_database_password_description = La constraseña que se utiliza en conjunto con en Nombre de Usuario para conectarse al servidor de base de datos.
param_database_name = Nombre de la Base de Datos
param_database_name_description = El nombre de la base de datos que almacenara los datos.
param_database_type = Tipo de Base de Datos
param_database_type_description = El software del servidor de la base de datos que se utiliza.
param_database_prefix = Prefijo de la Tabla
param_database_prefix_description = El prefijo a utilizar para las tablas de la base de datos (opcional).
param_database_import_sample_data = Importar Datos de Ejemplo
param_database_import_sample_data_description = Se recomienda insertar datos de ejemplo en la base de datos para las instalaciones de primera vez.

param_web_address = Direccion HTTP
param_web_ssl_address = Direccion HTTPS
param_web_address_description = La direccion web (http://) a la tienda online.
param_web_ssl_address_description = La direccion web segura (https://) a la tienda online.
param_web_root_directory = Directorio Raiz
param_web_use_ssl = ¿Utilizar SSL?
param_web_use_ssl_description = Seleccionar para hbilitar SSL (https://) en su sitio.  Si no se selecciona, la direccion WWW (http://) sera utilizada.
param_web_root_directory_description = El directorio donde la tienda online esta instalada en el servidor.
param_web_work_directory = Directorio de Trabajo
param_web_work_directory_description = El directorio de trabajo para los archivos creados temporalmente. (Los servidores de hospedaje compartidos no deberian utilizar /tmp/)


param_store_name = Nombre de la Tienda
param_store_name_description = El nombre de la tienda online que se le presentara al publico.
param_store_owner_first_name = Nombre
param_store_owner_first_name_description = El nombre del dueño de la tienda que se le presentara al publico.
param_store_owner_last_name = Apellido
param_store_owner_last_name_description = El apellido del dueño de la tienda que se le presentara al publico.
param_store_owner_email_address = E-Mail del Dueño de la Tienda
param_store_owner_email_address_description = La direccion de e-mail del dueño de la tienda que se le presentara al publico.
param_administrator_email = Email del Administrador
param_administrator_email_description = El email del administrador que se usara para la herramienta de autentificacion.
param_administrator_password = Clave Administrador
param_administrator_password_description = La clave que se usara para la cuenta del administrador.

box_info_step_1_title = Servidor de Base de Datos
box_info_step_1_text = El servidor de base de datos almacena el contenido de la tienda online como la infromacion de producto, infomracion del cliente, y los pedidos que se hagan. Por favor consulte al administrador de su servidor si los parametrso de su servidor de base de datos no los conoce todavia.
                                                                                                                              
box_info_step_2_title = Servidor Web                                                                                            
box_info_step_2_text = El servidor web server se encarga de enviar las paginas de la tienda online a los visitantes y clientes. Los parametros del servidor web se aseguran que los vinculos a las paginas apuntan a la ruta correcta. Los archivos temporales tales como los archivos de cache y sesion de datos son almacenados en el directorio de trabajo. Es importante que ete directorio se localice fuera del directorio raiz del servidor web y este protegido del acceso publico.

box_info_step_3_title = Parametros de la Tienda
box_info_step_3_text = Aqui puede definir el nombre de su tienda online, y la informacion de contacto del dueño de la tienda.  El usuario y la clave del administrador son utlizadas para autentificarse en la seccion protegida de la herramienta de administrracion.

box_info_step_4_title = ¡Terminado!
box_info_step_4_text = ¡Felicidades por configurar e instalar a Loaded Commerce como su solucion de tienda online! Le deseamos lo mejor con su tienda online y lo invitamos a unirse y participar en nuestra comunidad.<br /><br /><span style="float:right;">- El Equipo de Loaded Commerce </span>
box_info_step_5_text = El ID de su instalacion es

error_configuration_file_not_writeable = El servidor web parece no ser capaz de escribir los parametros de la tienda online a su archivo de configuracion debido a problemas con los permisos de archivo.  El archivo de configuracion esta localizado en: %s
error_configuration_file_alternate_method = Alternativamente usted puede copiar los parametros de configuracion al archivo de configuracion a mano.  Este proceso intentara actualizar el archivo de configuracion automaticamente al final de la isntalacion.
error_javascript_disabled = Se requiere de Javascript para el procedimiento de instalacion y la adminsitracion de la misma instalacion. Por favor habilitela en su navegador y <a href="index.php">vuelva a correr el procedimiento de instalacion</a>.

rpc_database_connection_test = Probando la conexion a la base de datos...
rpc_database_connection_error = Hubo un problema al conectar con el servidor de base de datos. El siguiente error ocurrio: <b>%s</b>.  Por favor verifique los parametros de conexion e intentelo de nuevo.
rpc_database_connected = Conectado exitosamente a la base de datos.
rpc_database_importing = La estructura de la base de datos esta siendo importada. Por favor sea paciente durante este procedimiento.
rpc_database_imported = Base de Datos importada exitosamente.
rpc_database_import_error = Hubo un problema al importar la base de datos. Ocurrio el siguiente error: <b>%s</b>. Por favor verifique los parametros de conexion e intentelo de nuevo.

rpc_work_directory_test = Probando el directorio de trabajo...
rpc_work_directory_error_non_existent = Hubo un problema al accesar el directorio de trabajo. Ocurrio el siguiente error: <b>El directorio no existe: %s</b>. Por favor verifique el directorio e intentelo de nuevo.
rpc_work_directory_error_not_writeable = Hubo un problema al accesar el directorio de trabajo. Ocurrio el siguiente error: <b>TEl servidor web no tiene permisos para escibir en el directorio: %s</b>. Por favor verifique los permisos del direcorio e intentelo de nuevo.
rpc_work_directory_configured = Directorio de trabajo configurado exitosamente.

rpc_database_sample_data_importing = Se estan importando los datos de ejemplo a la base de datos. Por favor sea paciente durante este procedimiento.
rpc_database_sample_data_imported = Los ejemplos de la base de datos han sido importados exitosamente.
rpc_database_sample_data_import_error = Hubo un problema al importar los datos de ejemplo de la base de datos. Ocurrio el sigueinte error: <b>%s</b>. Por favor vrifique el servidor de la base de datos e intentelo de nuevo.

error_configuration_file_not_writeable = ¡LO SENTIMOS! La escritura de su archivo "includes/config.php" no ha sido exitoso. Por favor siga las instrucciones abajo antes de proceder.
error_configuration_file_alternate_method = Por favor COPIE Y GUARDE el codigo del cuadro de abajo en un archivo llamado "config.php" enseguida cargelo a su servidor en la carpeta "includes/" de la Raiz del Catalogo desde donde comenzo la instalacion y seleccione reintentar.
